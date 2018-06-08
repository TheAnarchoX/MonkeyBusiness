<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\ActivityLog
 *
 */
	class ActivityLog extends \Eloquent {}
}

namespace App{
/**
 * App\Message
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $mobile_number
 * @property string $subject
 * @property string $message
 * @property int $is_read
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message read()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message unread()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereMobileNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereUpdatedAt($value)
 */
	class Message extends \Eloquent {}
}

namespace App{
/**
 * App\News
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string|null $img_path
 * @property string $slug
 * @property int $author
 * @property string $publication_date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News published()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News unpublished()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereImgPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News wherePublicationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereUpdatedAt($value)
 */
	class News extends \Eloquent {}
}

namespace App{
/**
 * App\Text
 *
 * @property int $id
 * @property string $key
 * @property string $view
 * @property int $author
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Text whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Text whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Text whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Text whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Text whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Text whereView($value)
 */
	class Text extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property string $img_path
 * @property string $password
 * @property string $admin
 * @property string|null $remember_token
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Activity[] $activities
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Album[] $albums
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\News[] $news
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Partner[] $partners
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Photo[] $photos
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Text[] $texts
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\User onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereImgPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUuid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\User withoutTrashed()
 */
	class User extends \Eloquent {}
}

