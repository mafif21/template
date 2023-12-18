<x-app-layout>
    <x-slot name="title">Homepage</x-slot>

    <main class="container my-5">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner rounded" style="height: 500px">
                <div class="carousel-item active">
                    <img src="https://blog-edutore-partner.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2020/05/31141035/kampus-telkom.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://mediacdn.quipper.com/media/W1siZiIsIjIwMjIvMDEvMTAvMTUvMDAvNTcvYzVkNzdmMDYtNDEyYy00Y2E3LTk1ZGQtOTA1MzY3NGY3NjMwLyJdLFsicCIsInRodW1iIiwiMTIwMHhcdTAwM2UiLHt9XSxbInAiLCJjb252ZXJ0IiwiLWNvbG9yc3BhY2Ugc1JHQiAtc3RyaXAiLHsiZm9ybWF0IjoianBnIn1dXQ.jpg?sha=6dfa715eca5bd939"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
</x-app-layout>
