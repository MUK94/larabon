<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
  use HasFactory;

	protected $fillable = [
		'title',
		'description',
		'author_bio',
		'price',
		'address',
		'phone_number',
		'cover_image',
	];
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}
}
