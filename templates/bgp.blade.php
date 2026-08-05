<div style="font-family:Segoe UI,Arial,sans-serif;max-width:820px;margin:auto;color:#1f2937">
@if ($alert->state == 0)
<div style="background:#ecfdf5;border-left:7px solid #059669;padding:18px"><div style="font-size:23px;font-weight:700">🟢 BGP-atvik lokið</div><div style="margin-top:6px">BGP-skilyrðið á <strong>{{ $alert->hostname }}</strong> á ekki lengur við.</div></div>
<table style="border-collapse:collapse;width:100%;margin-top:16px"><tr><td style="padding:8px;font-weight:600;width:190px">Tæki</td><td>{{ $alert->hostname }}</td></tr><tr style="background:#f3f4f6"><td style="padding:8px;font-weight:600">Atvik varði</td><td><strong>{{ $alert->elapsed }}</strong></td></tr></table>
<div style="background:#eff6ff;padding:12px;margin-top:15px">@if (str_contains(strtolower($alert->name), 're-established')) Sessionið hefur nú verið stöðugt lengur en endurtengingarmörk reglunnar. Þetta þýðir ekki að það hafi farið aftur niður. @else LibreNMS sér ekki lengur BGP-peer utan Established-stöðu. @endif</div>
@else
@if (str_contains(strtolower($alert->name), 'down'))
<div style="background:#fef2f2;border-left:7px solid #dc2626;padding:18px"><div style="font-size:23px;font-weight:700">🔴 BGP-session niðri</div><div style="margin-top:6px">Einn eða fleiri BGP-neighborar eru ekki Established.</div></div>
@else
<div style="background:#fffbeb;border-left:7px solid #d97706;padding:18px"><div style="font-size:23px;font-weight:700">🟠 BGP-session nýlega endurstofnað</div><div style="margin-top:6px">Session er komið upp en hefur verið Established í minna en 5 mínútur.</div></div>
@endif
<table style="border-collapse:collapse;width:100%;margin-top:16px;border:1px solid #d1d5db"><thead><tr style="background:#111827;color:white"><th style="padding:9px;text-align:left">Neighbor</th><th style="padding:9px;text-align:left">Remote AS</th><th style="padding:9px;text-align:left">Staða</th><th style="padding:9px;text-align:left">Established</th></tr></thead><tbody>@foreach ($alert->faults as $value)<tr><td style="padding:9px;border-top:1px solid #d1d5db"><strong>{{ $value['bgpPeerIdentifier'] ?? 'Óþekkt' }}</strong></td><td style="padding:9px;border-top:1px solid #d1d5db">{{ $value['bgpPeerRemoteAs'] ?? 'Óþekkt' }}</td><td style="padding:9px;border-top:1px solid #d1d5db">{{ $value['bgpPeerState'] ?? 'Óþekkt' }}</td><td style="padding:9px;border-top:1px solid #d1d5db">{{ isset($value['bgpPeerFsmEstablishedTime']) ? $value['bgpPeerFsmEstablishedTime'].' sek.' : 'Óþekkt' }}</td></tr>@endforeach</tbody></table>
<div style="background:#eff6ff;padding:12px;margin-top:15px">Athuga: <code>show bgp all summary</code> og <code>show logging | include BGP|ADJCHANGE|UPDOWN</code>.</div>
@endif
<div style="margin-top:22px;padding-top:12px;border-top:1px solid #d1d5db;font-size:12px;color:#6b7280">LibreNMS · Regla: {{ $alert->name }} · Alert ID: {{ $alert->uid }} · {{ $alert->timestamp }}</div></div>
