<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * Hatches\TripReport
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $fishery_id
 * @property string $start_time
 * @property string $end_time
 * @property string $title
 * @property string $report_body
 * @property integer $privacy_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\Asset[] $assets
 * @property-read \Illuminate\Database\Eloquent\Collection|\Tag[] $tags
 * @property-read \Fishery $fishery
 * @method static \Illuminate\Database\Query\Builder|\TripReport whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\TripReport whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\TripReport whereFisheryId($value)
 * @method static \Illuminate\Database\Query\Builder|\TripReport whereStartTime($value)
 * @method static \Illuminate\Database\Query\Builder|\TripReport whereEndTime($value)
 * @method static \Illuminate\Database\Query\Builder|\TripReport whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\TripReport whereReportBody($value)
 * @method static \Illuminate\Database\Query\Builder|\TripReport wherePrivacyId($value)
 * @method static \Illuminate\Database\Query\Builder|\TripReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\TripReport whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 * @property-read \Illuminate\Database\Eloquent\Collection|\Tag[] $comments
 * @property-read \Fishery $waterData
 * @property-read \Illuminate\Database\Eloquent\Collection|\Comment[] $weather
 * @property-read \WaterData $privacy
 */
//use Eloquent;

class TripReport extends Report
{
    protected $fillable = ['start_time', 'end_time', 'title', 'report_body', 'privacy_id'];


    public function createReport()
    {
        $this->save();
    }
}