<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongst an employer', function () {
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id]);
    //Act
    expect($job->employer)->toBeInstanceOf(Employer::class);
    //Assert
});
