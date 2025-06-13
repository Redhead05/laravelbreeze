<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-4">
            <div class="mb-3">
                <label for="entriesSelectReport" class="form-label">Show entries:</label>
                <select id="entriesSelectReport" class="form-select w-auto d-inline-block">
                    <option value="10" selected>10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <form class="position-relative table-src-form me-0" onsubmit="return false;">
                    <input type="text" class="form-control rounded-2" placeholder="Search here...." id="searchInputReport">
                    <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y text-secondary">search</i>
                </form>
            </div>
        </div>

        <div class="default-table-area style-two transaction-history-large">
            <div class="table-responsive">
                <table id="ReportTable" class="table align-middle">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Column 1</th>
                        <th scope="col">Column 2</th>
                        <th scope="col">Column 3</th>
                        <th scope="col">Column 4</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                        <td>Data 4</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Data 5</td>
                        <td>Data 6</td>
                        <td>Data 7</td>
                        <td>Data 8</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Data 9</td>
                        <td>Data 10</td>
                        <td>Data 11</td>
                        <td>Data 12</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap p-4">
                <span class="fs-12 fw-medium">Showing 10 of 30 Results</span>

                <nav aria-label="Page navigation">
                    <ul class="pagination mb-0 justify-content-center"></ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        let reportTable = $('#ReportTable').DataTable({
            "lengthMenu": [10, 20, 50, 100],
            "searching": true,
            "lengthChange": true,
            "dom": 'rt',
            "pageLength": 10,
            "paging": true,
            "info": false,
        });

        $('#searchInputReport').on('keyup', function () {
            reportTable.search(this.value).draw();
        });

        $('#entriesSelectReport').on('change', function () {
            let value = parseInt($(this).val(), 10);
            reportTable.page.len(value).draw();
        });
    });
</script>
