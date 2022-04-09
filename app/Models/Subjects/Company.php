<?php

namespace App\Models\Subjects;

use App\Enums\Role;
use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Subjects
 *
 * @property int $id
 * @property string $name
 * @property string $bin
 * @property int $license_count
 * @property Carbon|null $license_valid_till
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User[] $users
 * @method static CompanyFactory factory(...$parameters)
 * @method static Builder|Company newModelQuery()
 * @method static Builder|Company newQuery()
 * @method static Builder|Company query()
 * @method static Builder|Company whereName($value)
 * @method static Builder|Company whereBin($value)
 * @method static Builder|Company whereId($value)
 * @method static Builder|Company whereUpdatedAt($value)
 */
class Company extends Model
{
    use HasFactory;

    public function users() : HasMany
    {
        return $this->hasMany(
            related: User::class,
            foreignKey: 'company_id'
        );
    }
}
