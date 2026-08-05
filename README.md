# Averna LibreNMS Cisco Alert Pack

Sjálfstæður alert-pakki fyrir LibreNMS 26.6+ / 26.7+.

Pakkinn snertir ekki Cisco WLC AP Monitor pakkann og breytir engum LibreNMS core-skrám.
Hann notar opinbera LibreNMS API-ið til að stofna eða uppfæra:

- Cisco alert-reglur
- HTML alert templates
- tengingar milli reglna og templates
- notification operation með núverandi transport IDs, eða tengingu við operation sem er þegar til

## Stuðningur

- Cisco IOS
- Cisco IOS XE
- Cisco NX-OS
- ASR
- Catalyst
- Nexus
- BGP
- interfaces merkt með `[ALERT]`
- optical/DOM skynjarar
- fan, PSU, hitastig og almennir sensors
- device down og reboot

## Örugg hönnun

- `--dry-run`
- sjálfvirkt JSON-backup áður en breytingar eru gerðar
- idempotent: uppfærir hluti með sama Averna-heiti í stað þess að fjölga þeim
- engar beinar SQL-breytingar
- engar breytingar á `/opt/librenms` core-skrám
- reglur sem geta verið háðar gagnalíkani eru óvirkar sjálfgefið

## Fljótleg uppsetning

```bash
cp config/alert-pack.env.example config/alert-pack.env
nano config/alert-pack.env

./bin/validate-config
./bin/install --dry-run
./bin/install
```

Sjá `docs/INSTALL.md` og `docs/RULE-CATALOGUE.md`.
