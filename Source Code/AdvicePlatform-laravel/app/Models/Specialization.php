<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Specialization extends Authenticatable
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
        'collage_id',
        'description',
        'bgColor'
    ];

    public function collage(): BelongsTo
    {
        return $this->belongsTo(collage::class);
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
    public function getCollageId()
    {
        return $this->collage_id;
    }

    /**
     * @param mixed $collage_id
     */
    public function setCollageId($collage_id): void
    {
        $this->collage_id = $collage_id;
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
