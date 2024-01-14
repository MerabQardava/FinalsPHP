<x-app-layout>
    <div class="container mx-auto">
        <div class="row">
            @foreach($quizzes as $quiz)
                <div class="col-md-12 mb-4">
                    <div class="card custom-card {{ $quiz['status'] == 'approved' ? 'bg-success' : 'bg-warning' }}">
                        <img src="{{ asset($quiz->photo ? 'photos/' . $quiz->photo : 'photos/default-image.jpg') }}" alt="{{ $quiz->name }}" class="card-img-top custom-card-img">
                        <div class="card-body">
                            <h5 class="card-title text-light">{{ $quiz['name'] }}</h5>
                            <p class="card-text text-light">Status: {{ ucfirst($quiz['status']) }}</p>
                            <a href="{{ route('quiz.view', $quiz->id) }}" class="btn btn-light">View Quiz</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        /* Add your custom styles here */
        .custom-card {
            border: none;
            overflow: hidden;
        }

        .custom-card-img {
            max-height: 800px; /* Adjust the max-height to maintain the desired height */
            object-fit: cover; /* Maintain aspect ratio while covering the container */
        }

        /* Add background colors and text styles */
        .bg-success {
            background-color: #28a745;
        }

        .bg-warning {
            background-color: #ffc107;
        }

        .text-light {
            color: #fff;
        }
    </style>
</x-app-layout>
