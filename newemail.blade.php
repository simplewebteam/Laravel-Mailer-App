@extends('email')

@section('content')

<!-- New enquiry arrived -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="750">
    <tr>
        <td bgcolor="" align="auto" style="padding: 50px;" class="section-padding" valign="top">
            {!! $body['message'] !!}
        </td>
    </tr>
</table>

@stop
