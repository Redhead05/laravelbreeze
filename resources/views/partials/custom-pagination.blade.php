@if ($paginator->hasPages())
    <ul class="pagination mb-0 justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link icon" aria-hidden="true">
                    <i class="material-symbols-outlined">keyboard_arrow_left</i>
                </span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link icon" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">
                    <i class="material-symbols-outlined">keyboard_arrow_left</i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link icon" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">
                    <i class="material-symbols-outlined">keyboard_arrow_right</i>
                </a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link icon" aria-hidden="true">
                    <i class="material-symbols-outlined">keyboard_arrow_right</i>
                </span>
            </li>
        @endif
    </ul>
@endif
