<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/dragdrop.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.min.js') }}"></script>
<script src="{{ asset('assets/js/quill.min.js') }}"></script>
<script src="{{ asset('assets/js/data-table.js') }}"></script>
<script src="{{ asset('assets/js/prism.js') }}"></script>
<script src="{{ asset('assets/js/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/echarts.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/fullcalendar.main.js') }}"></script>
<script src="{{ asset('assets/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('assets/js/world-merc.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/lightpick.js') }}"></script>
<script src="{{ asset('assets/js/custom/apexcharts.js') }}"></script>
<script src="{{ asset('assets/js/custom/echarts.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom.js') }}"></script>
<script>
    $(document).ready(function () {

        let table = $('#UserTable').DataTable({
            "lengthMenu": [5, 6],
            "searching": false,
            "lengthChange": false,

            "dom": 'rt', // hide everything except table and processing
            "pageLength": 10,
            "paging": true,
            "info": false,

        });
        $('#searchInput').on('keyup', function () {
            console.log(`Kontol isinya ${this.value}`);
            table.search(this.value).draw();
        });
        $('#entriesSelect').on('change', function () {
            console.log(`keceluk ${this.val}`)
            let value = parseInt($(this).val(), 10);
            table.page.len(value).draw();
        });
        $(document).on('click', '.pagination a.page-link', function (e) {
            e.preventDefault();
            const page = parseInt($(this).data('page'), 10);
            if (!isNaN(page)) {
                table.page(page).draw('page');
            }
        });
        // init page pas render pertama
        updatePaginationUI(table);

        // init render SETELAH entriesSelect berubah
        table.on('draw', function () {
            updatePaginationUI(table); // ← THIS makes your custom pagination dynamic
        });
    });

    function updatePaginationUI(table) {
        const info = table.page.info(); // Get page info
        const currentPage = info.page;
        const totalPages = info.pages;
        const totalRecords = info.recordsDisplay;
        const startIndex = info.start + 1;
        const endIndex = info.end;

        // Update "Showing X of Y Results"
        $('.showing-wrap span').text(`Showing ${endIndex} of ${totalRecords} Results`);

        // Build pagination HTML
        let paginationHtml = '';

        // Previous button
        paginationHtml += `
                <li class="page-item ${currentPage === 0 ? 'disabled' : ''}">
                    <a class="page-link icon " href="#" data-page="${currentPage - 1}">
                        <i class="material-symbols-outlined">keyboard_arrow_left</i>
                    </a>
                </li>
            `;

        // Page numbers
        for (let i = 0; i < totalPages; i++) {
            paginationHtml += `
                    <li class="page-item">
                        <a class="page-link ${i === currentPage ? 'active' : ''}" href="#" data-page="${i}">${i + 1}</a>
                    </li>
                `;
        }

        // Next button
        paginationHtml += `
                <li class="page-item ${currentPage === totalPages - 1 ? 'disabled' : ''}">
                    <a class="page-link icon" href="#" data-page="${currentPage + 1}">
                        <i class="material-symbols-outlined">keyboard_arrow_right</i>
                    </a>
                </li>
            `;

        // Inject into DOM
        $('.pagination').html(paginationHtml);
    }

</script>
