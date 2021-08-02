<div class="container">
    <table id="schedules" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>日付</th>
                <th>対戦チーム</th>
                <th>試合会場</th>
            </tr>
        </thead>
    </table>
</div>
    
    @push('scripts')
    <script>
        $(document).ready(function() {
            $('#schedules').DataTable({
            serverSide: true,
            ajax: "{{ route('schedules') }}",
            columns: [
                    { name: '日付' },
                    { name: '対戦チーム' },
                    { name: '試合会場' },
                ]
            });
        });
    </script>
    @endpush