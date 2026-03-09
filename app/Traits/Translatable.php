<?php

namespace App\Traits;

use App\Models\Translation;

trait Translatable
{
    /**
     * Polymorphic translations relation
     */
    public function translations()
    {
        return $this->morphMany(Translation::class, 'translatable');
    }

    /**
     * Get a single translation value
     */
    public function getTranslation(string $key, string $locale): ?string
    {
        return $this->translations
            ->where('locale', $locale)
            ->where('key', $key)
            ->first()
                ?->value;
    }

    /**
     * Get all translations for this model grouped by locale
     * Returns: ['tr' => ['title' => '...', 'description' => '...'], 'en' => [...]]
     */
    public function getTranslationsArray(): array
    {
        $result = [];
        foreach ($this->translations as $translation) {
            $result[$translation->locale][$translation->key] = $translation->value;
        }
        return $result;
    }

    /**
     * Save translations from a request array
     * $data = ['tr' => ['title' => '...', 'description' => '...'], 'en' => [...]]
     */
    public function saveTranslations(array $data): void
    {
        foreach ($data as $locale => $fields) {
            foreach ($fields as $key => $value) {
                Translation::updateOrCreate(
                    [
                        'translatable_type' => static::class,
                        'translatable_id' => $this->id,
                        'locale' => $locale,
                        'key' => $key,
                    ],
                    ['value' => $value]
                );
            }
        }
    }

    /**
     * Get the available locales from settings
     */
    public static function availableLocales(): array
    {
        try {
            $setting = \App\Models\Setting::first();
            if ($setting && !empty($setting->available_locales)) {
                $raw = is_array($setting->available_locales)
                    ? $setting->available_locales
                    : json_decode($setting->available_locales, true);
                if (!empty($raw)) {
                    // Always ensure 'tr' is first
                    $locales = array_unique(array_merge(['tr'], $raw));
                    return array_values($locales);
                }
            }
        } catch (\Exception $e) {
            // fallback
        }
        // Default: always show at least Turkish + English
        return ['tr', 'en'];
    }
}
