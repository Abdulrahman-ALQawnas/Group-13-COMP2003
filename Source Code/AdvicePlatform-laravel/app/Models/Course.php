<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'image',
        'description',
        'specialization_id',
        'bgColor'
    ];

    public function specialization(): BelongsTo
    {
        return $this->belongsTo(Specialization::class);
    }
    public function follower(): BelongsTo
    {
        return $this->belongsTo(Follower::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasmany(Review::class);
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = Functions::StoreImageModel($value,'specializations/image');
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }
     /**
     * @return mixed
     */
    public function getSpecializationId()
    {
        return $this->specialization_idid;
    }

    /**
     * @param mixed $specialization_id
     */
    public function setSpecializationId($specialization_id): void
    {
        $this->specialization_id = $specialization_id;
    }
    /**
     * @return mixed
     */
    public function getBgColor()
    {
        return $this->bgColor;
    }

    /**
     * @param mixed $bgColor
     */
    public function setBgColor($bgColor): void
    {
        $this->bgColor = $bgColor;
    }

}
