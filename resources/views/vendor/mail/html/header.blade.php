<tr>
<td class="header">
    @php use App\Custom\Archivos; @endphp

@if (trim($slot) === 'Lacq')
<img src="{{ Archivos::imagenABase64(public_path("img/LACQ-logo.png")) }}" style="padding:30px;" alt="Lacq Logo">
@else
{{ $slot }}
@endif
</td>
</tr>
