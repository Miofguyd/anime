<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\Cast;
use App\Models\Tag;
use App\Models\Subscription;


class Anime extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'title',
        'title_kana',
        'title_en',
        'media',
        'media_text',
        'released_on',
        'released_on_about',
        'official_site_url',
        'wikipedia_url',
        'twitter_username',
        'twitter_hashtag',
        'syobocal_tid',
        'mal_media_id',
        'images',
        'episodes_count',
        'watchers_count',
        'reviews_count',
        'no_episodes',
        'season_name',
        'season_name_text',
        'annict_id',
        'media',
        'image_url',
        'casts',
        ];
        
        public function reviews()
        {
            return $this->hasMany(Review::class);
        }
        
        public function casts()
        {
            return $this->belongsToMany(Cast::class);
        }
        
        public function tags()
        {
            return $this->belongsToMany(Tag::class);
        }
        
        public function subscriptions()
        {
            return $this->belongsToMany(Subscription::class);
        }
}

