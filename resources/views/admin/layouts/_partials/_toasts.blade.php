@if (Session::has('toastr'))
    @php
        $toastr = Session::get('toastr');
        $type = \Illuminate\Support\Arr::get($toastr, 'type', 'success');
        $message = \Illuminate\Support\Arr::get($toastr, 'message', '');
        $options = $userOptions = isset($toastr['options']) ? $toastr['options'] : [];
        $defaultOptions = [
            'timeOut' => 5000, // Display toastr for 5 seconds
            'positionClass' => 'toast-top-right', // Display toastr at the top-right corner
            'closeButton' => true, // Display a close button
            'progressBar' => true, // Display a progress bar
            'extendedTimeOut' => 1000, // Extend display time by 1 second when hovered over
            'newestOnTop' => false, // Display newer toastr notifications at the bottom
            'preventDuplicates' => true, // Prevent duplicate toastr notifications
            'showMethod' => 'slideDown', // Use slideDown animation to show toastr
            'hideMethod' => 'slideUp', // Use slideUp animation to hide toastr
            'tapToDismiss' => false, // Disable tap-to-dismiss feature
        ];
        $options = json_encode(array_merge($defaultOptions, $userOptions));
    @endphp

    <script>
        $(function() {
            toastr.{{ $type }}('{!! $message !!}', null, {!! $options !!});
        });
    </script>
@endif
