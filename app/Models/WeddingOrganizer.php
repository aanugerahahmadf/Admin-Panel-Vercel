<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string|null $address
 * @property string|null $latitude
 * @property string|null $longitude
 * @property float $rating
 * @property int $is_verified
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read mixed $business_name
 * @property-read mixed $city
 * @property-read mixed $cover_image_url
 * @property-read mixed $email
 * @property-read mixed $logo_url
 * @property-read mixed $phone
 * @property-read mixed $total_reviews
 * @property-read string|null $video_url
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read Collection<int, Package> $packages
 * @property-read int|null $packages_count
 * @property-read Collection<int, Review> $reviews
 * @property-read int|null $reviews_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer whereIsVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WeddingOrganizer whereRating($value)
 * @method static \App\Models\WeddingOrganizer|null find(mixed $id, array $columns = ['*'])
 * @method static \App\Models\WeddingOrganizer findOrFail(mixed $id, array $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\WeddingOrganizer> get(array $columns = ['*'])
 * @property int $isVerified
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @property-read mixed $businessName
 * @property-read mixed $coverImageUrl
 * @property-read mixed $logoUrl
 * @property-read mixed $totalReviews
 * @property-read string|null $videoUrl
 * @property-read int|null $mediaCount
 * @property-read bool|null $mediaExists
 * @property-read int|null $packagesCount
 * @property-read bool|null $packagesExists
 * @property-read int|null $reviewsCount
 * @property-read bool|null $reviewsExists
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\WeddingOrganizer whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\WeddingOrganizer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WeddingOrganizer extends Model implements HasMedia
{
    use InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')->singleFile();
        $this->addMediaCollection('gallery');
        $this->addMediaCollection('videos');
    }

    protected $fillable = [
        'name',
        'slug',
        'description',
        'address',
        'latitude',
        'longitude',
        'rating',
        'is_verified',
    ];

    protected $appends = [
        'business_name',
        'city',
        'logo_url',
        'cover_image_url',
        'phone',
        'total_reviews',
        'video_url',
    ];

    /**
     * Get the superadmin user (Devi Make Up owner)
     */
    public static function getOwner()
    {
        return User::whereHas('roles', function ($query): void {
            $query->where('name', 'super_admin');
        })->first();
    }

    public function getBusinessNameAttribute()
    {
        return $this->name;
    }

    public function getCityAttribute()
    {
        if (! $this->address) {
            return 'Unknown';
        }
        $parts = explode(',', $this->address);

        return trim(end($parts)) ?: 'Unknown';
    }

    public function getPhoneAttribute()
    {
        $owner = self::getOwner();

        return $owner?->phone ?? '';
    }

    public function getEmailAttribute()
    {
        $owner = self::getOwner();

        return $owner?->email ?? '';
    }

    public function getLogoUrlAttribute()
    {
        return $this->getFirstMediaUrl('logo') ?: 'https://via.placeholder.com/150';
    }

    public function getCoverImageUrlAttribute()
    {
        return $this->getFirstMediaUrl('gallery') ?: 'https://via.placeholder.com/800x400';
    }

    public function getVideoUrlAttribute(): ?string
    {
        return $this->getFirstMediaUrl('videos') ?: null;
    }

    public function getTotalReviewsAttribute()
    {
        return $this->reviews_count ?? $this->reviews()->count();
    }

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
