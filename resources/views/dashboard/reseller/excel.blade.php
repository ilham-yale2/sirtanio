
<table width="100%">
    <thead>
        <tr>
            <th colspan="3" style="font-weight:bold; text-align:center">Reseller List sirtanio.id</th>
        </tr>
        <tr>
            <th style="background:yellow;border:1px solid #888888;width:200px;font-weight:bold;text-align:center">Nama Lengkap</th>
            <th style="background:yellow;border:1px solid #888888;width:150px;font-weight:bold;text-align:center">Nomor Telephone</th>
            <th style="background:yellow;border:1px solid #888888;width:300px;font-weight:bold;text-align:center">Alamat Pengiriman</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($resellers as $item)
            <tr>
                <td style="border:1px solid #888888">{{$item->full_name}}</td>
                <td style="border:1px solid #888888">
                    {{$item->phone_number}}
                </td>
               <td style="border:1px solid #888888">
                    {{$item->shipping_address}}
               </td>
            </tr>
        @endforeach
    </tbody>
</table>