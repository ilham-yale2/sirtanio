<table width="100%">
    <thead>
        <tr>
            <th style="border:1px solid black;width:200px;font-weight:bold;text-align:center">Nama Lengkap</th>
            <th style="border:1px solid black;width:100px;font-weight:bold;text-align:center">Umur</th>
            <th style="border:1px solid black;width:150px;font-weight:bold;text-align:center">Nomor Telephone</th>
            <th style="border:1px solid black;width:200px;font-weight:bold;text-align:center">Pekerjaan</th>
            <th style="border:1px solid black;width:150px;font-weight:bold;text-align:center">Whatsapp</th>
            <th style="border:1px solid black;width:300px;font-weight:bold;text-align:center">Keterangan</th>
            <th style="border:1px solid black;width:300px;font-weight:bold;text-align:center">Alamat Pengiriman</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($participants as $item)
            <tr>
                <td style="border:1px solid black">{{$item->full_name}}</td>

                <td style="border:1px solid black"> {{ $item->age }}</td>
                <td style="border:1px solid black">
                    {{$item->phone_number}}
                </td>
                <td style="border:1px solid black">
                    {{$item->profession}}
                </td>
               <td style="border:1px solid black">
                    {{$item->reason}}
               </td>
               <td style="border:1px solid black">
                    {{$item->shipping_address}}
               </td>
            </tr>
        @endforeach
    </tbody>
</table>