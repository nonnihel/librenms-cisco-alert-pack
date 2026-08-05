# Bilanagreining

## API 401/403

Athugaðu API token og réttindi notandans.

## Builder rejected

LibreNMS gagnalíkan getur verið mismunandi eftir útgáfu eða OS-gögnum. Reglur sem eru óvirkar sjálfgefið þarf að prófa í:

```text
Device -> Edit -> Capture -> Alerts
```

## Optical -40 dBm

Þetta merkir oft að ekkert móttekið ljós er til staðar. Ef portið er viljandi ónotað skaltu setja sensor á Ignore eða fjarlægja transceiverinn.

## Port down flóð

Port-reglan notar `[ALERT]` í `ifAlias`. Fjarlægðu merkið af ports sem ekki eiga að senda alert.

## Uppfærsla LibreNMS

Reglur, templates og operation-tengingar eru í gagnagrunni og core-skrár eru ekki breyttar. Eftir stóra uppfærslu:

```bash
./bin/install --dry-run
./bin/install
```
