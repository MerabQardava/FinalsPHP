<x-app-layout>
    <div class="quiz-wrapper">
        <div class="quiz-header">
            <a href="/quizzes" class="back-link">⬅ Back to Quizzes</a>
            <h1 class="quiz-name">{{ $quiz['name'] }}</h1>
        </div>
        <div class="quiz-body">
            <div class="quiz-image">
                <img src="{{ asset($quiz->photo ? 'photos/' . $quiz->photo : 'photos/default-image.jpg') }}" alt="{{ $quiz->name }}">
            </div>
            <div class="quiz-details">
                <h2 class="detail-title">Quiz Overview</h2>
                <p><strong>Status:</strong> {{ $quiz['status'] }}</p>
                <p><strong>Description:</strong> {{ $quiz['description'] }}</p>
                <p><strong>Author:</strong> {{ $quiz->user->name }}</p>
                <p><strong>Questions:</strong> {{ $quiz->questions()->count() }}</p>
                <a href="{{ route('quiz.start', $quiz->id) }}" class="start-button">Start Quiz</a>
            </div>
        </div>
    </div>

    <style>
        .quiz-wrapper {
            text-align: center;
            padding: 20px;
            color: #444;
            background: #f0f0f0;
            border-radius: 8px;
            max-width: 700px;
            margin: auto;
        }

        .quiz-header {
            margin-bottom: 20px;
        }

        .back-link {
            color: #4285f4;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .quiz-name {
            color: #333;
            font-size: 2rem;
        }

        .quiz-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .quiz-details {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .detail-title {
            color: #4285f4;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .start-button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            margin-top: 15px;
        }

        .start-button:hover {
            background-color: #388E3C;
        }
    </style>
</x-app-layout>