@section('inline-js')
    @parent
    <script>
        $(document).ready(function () {
            $('.dataTables_empty').text('No records found.');
        });
    </script>
@endsection