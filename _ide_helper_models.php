<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string|null $image_url
 * @property string|null $video_url
 * @property bool $is_published
 * @property Carbon|null $published_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $author
 * @property-read string|null $media_video_url
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereTitle($value)
 * @method static \App\Models\Article|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Article findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Article|null first(array|string $columns = ['*'])
 * @method static \App\Models\Article firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Article> get(array|string $columns = ['*'])
 * @property int $authorId
 * @property string|null $imageUrl
 * @property string|null $videoUrl
 * @property bool $isPublished
 * @property \Illuminate\Support\Carbon|null $publishedAt
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @property-read string|null $mediaVideoUrl
 * @property-read int|null $mediaCount
 * @property-read bool|null $mediaExists
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Article whereVideoUrl($value)
 * @mixin \Eloquent
 */
	class Article extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $title
 * @property string $image_url
 * @property string|null $link_url
 * @property bool $is_active
 * @property int $sort_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Banner whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Banner whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Banner whereLinkUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Banner whereSortOrder($value)
 * @method static \App\Models\Banner|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Banner findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Banner|null first(array|string $columns = ['*'])
 * @method static \App\Models\Banner firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Banner> get(array|string $columns = ['*'])
 * @property string $imageUrl
 * @property string|null $linkUrl
 * @property bool $isActive
 * @property int $sortOrder
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Banner whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Banner extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $icon
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, Package> $packages
 * @property-read int|null $packages_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereName($value)
 * @method static \App\Models\Category|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Category findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Category|null first(array|string $columns = ['*'])
 * @method static \App\Models\Category firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> get(array|string $columns = ['*'])
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @property-read int|null $packagesCount
 * @property-read bool|null $packagesExists
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $title
 * @property array<array-key, mixed> $user_ids
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read mixed $inbox_title
 * @property-read Collection<int, Message> $messages
 * @property-read int|null $messages_count
 * @property-read mixed $other_users
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox whereUserIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inbox withoutTrashed()
 * @method static \App\Models\Inbox|null find(mixed $id, array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Inbox> get(array|string $columns = ['*'])
 * @property array<array-key, mixed> $userIds
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @property \Illuminate\Support\Carbon|null $deletedAt
 * @property-read mixed $inboxTitle
 * @property-read int|null $messagesCount
 * @property-read bool|null $messagesExists
 * @property-read mixed $otherUsers
 * @mixin \Eloquent
 */
	class Inbox extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $inbox_id
 * @property string|null $message
 * @property int $user_id
 * @property array<array-key, mixed>|null $read_by
 * @property array<array-key, mixed>|null $read_at
 * @property array<array-key, mixed>|null $notified
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read MediaCollection<int, Media> $attachments
 * @property-read int|null $attachments_count
 * @property-read Inbox|null $inbox
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read User|null $sender
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereInboxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereNotified($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereReadBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereUserId($value)
 * @method static \App\Models\Message|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Message findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Message|null first(array|string $columns = ['*'])
 * @method static \App\Models\Message firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Message> get(array|string $columns = ['*'])
 * @property int $inboxId
 * @property int $userId
 * @property array<array-key, mixed>|null $readBy
 * @property array<array-key, mixed>|null $readAt
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @property \Illuminate\Support\Carbon|null $deletedAt
 * @property-read int|null $attachmentsCount
 * @property-read bool|null $attachmentsExists
 * @property-read int|null $mediaCount
 * @property-read bool|null $mediaExists
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Message withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Message withoutTrashed()
 * @mixin \Eloquent
 */
	class Message extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $package_id
 * @property string $order_number
 * @property float $total_price
 * @property string $status
 * @property string $payment_status
 * @property \Illuminate\Support\Carbon $booking_date
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $event_date
 * @property-read Payment|null $latestPayment
 * @property-read Package $package
 * @property-read Collection<int, Payment> $payments
 * @property-read int|null $payments_count
 * @property-read User $user
 * @property-read WeddingOrganizer|null $weddingOrganizer
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBookingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereTotalPrice($value)
 * @method static \App\Models\Order|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Order findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Order|null first(array|string $columns = ['*'])
 * @method static \App\Models\Order firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> get(array|string $columns = ['*'])
 * @property int $userId
 * @property int $packageId
 * @property string $orderNumber
 * @property numeric $totalPrice
 * @property string $paymentStatus
 * @property \Illuminate\Support\Carbon $bookingDate
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @property-read mixed $eventDate
 * @property-read int|null $paymentsCount
 * @property-read bool|null $paymentsExists
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Order whereUserId($value)
 * @mixin \Eloquent
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $wedding_organizer_id
 * @property int|null $category_id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property float $price
 * @property float|null $discount_price
 * @property bool $is_featured
 * @property array<array-key, mixed>|null $features
 * @property string|null $theme
 * @property string|null $color
 * @property int|null $min_capacity
 * @property int|null $max_capacity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Category|null $category
 * @property-read mixed $image_url
 * @property-read bool $is_wishlisted
 * @property-read string|null $video_url
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read Collection<int, Order> $orders
 * @property-read int|null $orders_count
 * @property-read Collection<int, Review> $reviews
 * @property-read int|null $reviews_count
 * @property-read WeddingOrganizer $weddingOrganizer
 * @property-read Collection<int, Wishlist> $wishlists
 * @property-read int|null $wishlists_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereDiscountPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereFeatures($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereMaxCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereMinCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Package whereTheme($value)
 * @method static \App\Models\Package|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Package findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Package|null first(array|string $columns = ['*'])
 * @method static \App\Models\Package firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Package> get(array|string $columns = ['*'])
 * @property int $weddingOrganizerId
 * @property int|null $categoryId
 * @property numeric|null $discountPrice
 * @property bool $isFeatured
 * @property int|null $minCapacity
 * @property int|null $maxCapacity
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @property-read mixed $imageUrl
 * @property-read bool $isWishlisted
 * @property-read string|null $videoUrl
 * @property-read int|null $mediaCount
 * @property-read bool|null $mediaExists
 * @property-read int|null $ordersCount
 * @property-read bool|null $ordersExists
 * @property-read int|null $reviewsCount
 * @property-read bool|null $reviewsExists
 * @property-read int|null $wishlistsCount
 * @property-read bool|null $wishlistsExists
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Package whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Package whereWeddingOrganizerId($value)
 * @mixin \Eloquent
 */
	class Package extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $order_id
 * @property string $payment_number
 * @property string $payment_method
 * @property string $status
 * @property float $amount
 * @property float $admin_fee
 * @property float $total_amount
 * @property string|null $payment_proof
 * @property Carbon|null $paid_at
 * @property Carbon|null $expired_at
 * @property Carbon|null $cancelled_at
 * @property string|null $notes
 * @property array<array-key, mixed>|null $metadata
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string $payment_method_label
 * @property-read string $status_color
 * @property-read string $status_label
 * @property-read PaymentMethod|null $methodDetails
 * @property-read Order $order
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereAdminFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereCancelledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereMetadata($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment wherePaidAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment wherePaymentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment wherePaymentProof($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereStatus($value)
 * @method static \App\Models\Payment|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Payment findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Payment|null first(array|string $columns = ['*'])
 * @method static \App\Models\Payment firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payment> get(array|string $columns = ['*'])
 * @property int $orderId
 * @property string $paymentNumber
 * @property string $paymentMethod
 * @property numeric $adminFee
 * @property numeric $totalAmount
 * @property string|null $paymentProof
 * @property \Illuminate\Support\Carbon|null $paidAt
 * @property \Illuminate\Support\Carbon|null $expiredAt
 * @property \Illuminate\Support\Carbon|null $cancelledAt
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @property-read string $paymentMethodLabel
 * @property-read string $statusColor
 * @property-read string $statusLabel
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Payment whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Payment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $code
 * @property string|null $icon
 * @property string|null $account_number
 * @property string|null $account_holder
 * @property string|null $qris_image
 * @property float $fee
 * @property string|null $instructions
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read mixed $icon_url
 * @property-read mixed $qris_image_url
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereAccountHolder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereQrisImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PaymentMethod whereUpdatedAt($value)
 * @property string|null $accountNumber
 * @property string|null $accountHolder
 * @property string|null $qrisImage
 * @property bool $isActive
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @property-read mixed $iconUrl
 * @property-read mixed $qrisImageUrl
 * @method static \App\Models\PaymentMethod|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\PaymentMethod findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\PaymentMethod> get(array|string $columns = ['*'])
 * @method static \App\Models\PaymentMethod|null first(array|string $columns = ['*'])
 * @method static \App\Models\PaymentMethod firstOrFail(array|string $columns = ['*'])
 * @mixin \Eloquent
 */
	class PaymentMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $wedding_organizer_id
 * @property int|null $package_id
 * @property int $rating
 * @property string|null $comment
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Package|null $package
 * @property-read User $user
 * @property-read WeddingOrganizer $weddingOrganizer
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Review query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Review whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Review wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Review whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Review whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Review whereUserId($value)
 * @method static \App\Models\Review|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Review findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Review|null first(array|string $columns = ['*'])
 * @method static \App\Models\Review firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Review> get(array|string $columns = ['*'])
 * @property int $userId
 * @property int $weddingOrganizerId
 * @property int|null $packageId
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Review whereWeddingOrganizerId($value)
 * @mixin \Eloquent
 */
	class Review extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $reference_number
 * @property float $amount
 * @property float $admin_fee
 * @property float $total_amount
 * @property string|null $payment_method
 * @property string $status
 * @property string|null $payment_url
 * @property string|null $snap_token
 * @property string|null $payment_proof
 * @property Carbon|null $paid_at
 * @property string|null $notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup whereAdminFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup wherePaidAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup wherePaymentProof($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup wherePaymentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup whereReferenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup whereSnapToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topup whereUpdatedAt($value)
 * @method static \App\Models\Topup|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Topup findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Topup|null first(array|string $columns = ['*'])
 * @method static \App\Models\Topup firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Topup> get(array|string $columns = ['*'])
 * @property int $userId
 * @property string $referenceNumber
 * @property numeric $adminFee
 * @property numeric $totalAmount
 * @property string|null $paymentMethod
 * @property string|null $paymentUrl
 * @property string|null $snapToken
 * @property string|null $paymentProof
 * @property \Illuminate\Support\Carbon|null $paidAt
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Topup whereUserId($value)
 * @mixin \Eloquent
 */
	class Topup extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $source_text
 * @property string $source_hash
 * @property string $target_locale
 * @property string $translated_text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereSourceHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereSourceText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereTargetLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereTranslatedText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereUpdatedAt($value)
 * @property string $sourceText
 * @property string $sourceHash
 * @property string $targetLocale
 * @property string $translatedText
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @mixin \Eloquent
 */
	class Translation extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property float $balance
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $username
 * @property string|null $avatar_url
 * @property string|null $phone
 * @property string|null $address
 * @property float|null $latitude
 * @property float|null $longitude
 * @property float|null $budget
 * @property Carbon|null $wedding_date
 * @property string|null $theme_preference
 * @property string|null $color_preference
 * @property string|null $event_concept
 * @property string|null $dream_venue
 * @property string|null $custom_fields
 * @property bool $active_status
 * @property string $avatar
 * @property int $dark_mode
 * @property string|null $messenger_color
 * @property-read UserLanguage|null $lang
 * @property-read mixed $name
 * @property-read DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection<int, Order> $orders
 * @property-read int|null $orders_count
 * @property-read Collection<int, PaymentMethod> $paymentMethods
 * @property-read int|null $payment_methods_count
 * @property-read Collection<int, Payment> $payments
 * @property-read int|null $payments_count
 * @property-read Collection<int, Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read Collection<int, Role> $roles
 * @property-read int|null $roles_count
 * @property-read Collection<int, PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read Collection<int, Wishlist> $wishlists
 * @property-read int|null $wishlists_count
 * @method \Illuminate\Database\Eloquent\Builder allConversations()
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User permission($permissions, bool $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User role($roles, ?string $guard = null, bool $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereActiveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatarUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereColorPreference($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCustomFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDarkMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDreamVenue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEventConcept($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereMessengerColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereThemePreference($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereWeddingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutRole($roles, ?string $guard = null)
 * @method static \App\Models\User|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\User findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\User|null first(array|string $columns = ['*'])
 * @method static \App\Models\User firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> get(array|string $columns = ['*'])
 * @property string $fullName
 * @property \Illuminate\Support\Carbon|null $emailVerifiedAt
 * @property string|null $rememberToken
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $avatarUrl
 * @property \Illuminate\Support\Carbon|null $weddingDate
 * @property string|null $themePreference
 * @property string|null $colorPreference
 * @property string|null $eventConcept
 * @property string|null $dreamVenue
 * @property string|null $customFields
 * @property bool $activeStatus
 * @property int $darkMode
 * @property string|null $messengerColor
 * @property-read int|null $notificationsCount
 * @property-read bool|null $notificationsExists
 * @property-read int|null $ordersCount
 * @property-read bool|null $ordersExists
 * @property-read int|null $paymentMethodsCount
 * @property-read bool|null $paymentMethodsExists
 * @property-read int|null $paymentsCount
 * @property-read bool|null $paymentsExists
 * @property-read int|null $permissionsCount
 * @property-read bool|null $permissionsExists
 * @property-read int|null $rolesCount
 * @property-read bool|null $rolesExists
 * @property-read int|null $tokensCount
 * @property-read bool|null $tokensExists
 * @property-read int|null $wishlistsCount
 * @property-read bool|null $wishlistsExists
 * @mixin \Eloquent
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser, \Filament\Models\Contracts\HasAvatar, \Filament\Models\Contracts\HasName, \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $model_id
 * @property string $model_type
 * @property string|null $lang
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Model|\Eloquent $model
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserLanguage whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserLanguage whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserLanguage whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserLanguage whereUpdatedAt($value)
 * @property string $modelId
 * @property string $modelType
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @mixin \Eloquent
 */
	class UserLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $code
 * @property string|null $description
 * @property float $discount_amount
 * @property string $discount_type
 * @property float $min_purchase
 * @property Carbon|null $expires_at
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Voucher whereIsActive($value)
 * @method static \App\Models\Voucher|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Voucher findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Voucher|null first(array|string $columns = ['*'])
 * @method static \App\Models\Voucher firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Voucher> get(array|string $columns = ['*'])
 * @property numeric $discountAmount
 * @property string $discountType
 * @property numeric $minPurchase
 * @property \Illuminate\Support\Carbon|null $expiresAt
 * @property bool $isActive
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Voucher whereMinPurchase($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Voucher whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Voucher extends \Eloquent {}
}

namespace App\Models{
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
	class WeddingOrganizer extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $package_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Package $package
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereUserId($value)
 * @property int $id
 * @property int $user_id
 * @property int $package_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Package $package
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wishlist whereUserId($value)
 * @property int $userId
 * @property int $packageId
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @mixin \Eloquent
 */
	class Wishlist extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $reference_number
 * @property float $amount
 * @property string $bank_name
 * @property string $account_number
 * @property string $account_holder
 * @property string $status
 * @property string|null $notes
 * @property string|null $admin_notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal whereAccountHolder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal whereAdminNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal whereReferenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Withdrawal whereStatus($value)
 * @method static \App\Models\Withdrawal|null find(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Withdrawal findOrFail(mixed $id, array|string $columns = ['*'])
 * @method static \App\Models\Withdrawal|null first(array|string $columns = ['*'])
 * @method static \App\Models\Withdrawal firstOrFail(array|string $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection<int, \App\Models\Withdrawal> get(array|string $columns = ['*'])
 * @property int $userId
 * @property string $referenceNumber
 * @property string $bankName
 * @property string $accountNumber
 * @property string $accountHolder
 * @property string|null $adminNotes
 * @property \Illuminate\Support\Carbon|null $createdAt
 * @property \Illuminate\Support\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Withdrawal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|\App\Models\Withdrawal whereUserId($value)
 * @mixin \Eloquent
 */
	class Withdrawal extends \Eloquent {}
}

