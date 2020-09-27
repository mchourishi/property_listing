@php
    $title = $title ?? '';
    $fa = $fa ?? 'no_fa_provided';
    $class = $class ?? 'btn-default';
    $message = $message ?? 'no_message_provided';
    $showAlert = $showAlert ?? false;
    $showHtml = $showHtml ?? false;
    $alertMessage = $alertMessage ?? 'No alert message provided.';
    $linkToButton = $linkToButton ?? false;
    $align = $align ?? 'text-center';
    $onClick = $onClick ?? "$('#".$id."').hide(); $('#form_".$id."').submit();";
@endphp
<!-- Central Modal Medium Info -->
<div class="modal fade left" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-side modal-top-left" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <span class="h4">{!! $title !!}</span>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="{{$align}} modal-message">
                    @if($showHtml)
                        <div>{!! ($showAlert ? $alertMessage : $message) !!}</div>
                    @else
                        <p><strong>{{($showAlert ? $alertMessage : $message)}}</strong></p>
                    @endif
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                @if($showAlert)
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Ok</button>
                @else
                    <button type="button" id="modal_ok" class="btn btn-primary" onclick="{{$onClick}}">Ok</button>
                    <button type="button" id="modal_cancel" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                @endif
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Info-->

@if($linkToButton != false)
    @section('inline-js')
        @parent
        <script type="text/javascript">
            $('button#{{$linkToButton}}').attr('data-target', '#{{$id}}').attr('data-toggle', 'modal');
        </script>
    @endsection
@else
    <button class="btn {{$class}}" data-toggle="modal" data-target="#{{$id}}" title="{{$title}}">{{$name}} <em class="fa {{$fa}}"></em></button>
@endif