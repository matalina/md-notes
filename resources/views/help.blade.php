@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Icon Legend</div>

                <div class="card-body">
                    <ul>
                        <li><i class="fas fa-circle fa-fw"></i> - Task</li>
                        <li><i class="far fa-circle fa-fw"></i> - Event</li>
                        <li><i class="fas fa-minus fa-fw"></i> - Note</li>
                        <li><i class="fas fa-times fa-fw"></i> - Completed Task</li>
                        <li><i class="fas fa-angle-right fa-fw"></i> - Migrated Task</li>
                        <li><i class="fas fa-angle-left fa-fw"></i> - Scheduled Task</li>
                        <li><i class="fas fa-star-of-life fa-fw"></i> - Priority</li>
                        <li><i class="fas fa-exclamation fa-fw"></i> - Inspiration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Template Listing</div>

                <div class="card-body">
                    <ul>
                        <li>index - Index Pages</li>
                        <li>future - Future Log</li>
                        <li>month - Monthly Log</li>
                        <li>day - Daily Log</li>
                        <li>custom - Custom Collection</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
