<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongst an employer', function () {
    //Arrange
    Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => Employer::first()->id]);
    //Act

    //Assert
});
