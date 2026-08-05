# Uppsetning

## 1. API token

Í LibreNMS búðu til API token fyrir admin-notanda og afritaðu config:

```bash
cp config/alert-pack.env.example config/alert-pack.env
nano config/alert-pack.env
```

## 2. Notification operation

Nota operation sem er þegar til:

```ini
ALERT_OPERATION_ID=7
```

Eða láta pakkann stofna operation úr transport IDs:

```ini
ALERT_OPERATION_ID=
TRANSPORT_TARGETS=3,5,g2
```

## 3. Dry run og uppsetning

```bash
./bin/validate-config
./bin/install --dry-run
./bin/install
```

Backup verður vistað undir `backups/`.

## 4. Mikilvæg port

Merktu aðeins port sem eiga að senda alert:

```text
[ALERT][WAN] Vodafone MetroNet 10G
[ALERT][CORE] Uplink to Nexus-02
```

Settu ónotaða optical sensors á Ignore í LibreNMS ef SFP er í porti en ekkert ljós á að vera til staðar.

## 5. Prófun

Í GUI:

```text
Device -> Edit -> Capture -> Alerts
```

Með CLI:

```bash
cd /opt/librenms
sudo -u librenms ./scripts/test-alert.php -r RULE_ID -h HOSTNAME -d
```

## Uppfærsla pakkans

```bash
git pull
./bin/install --dry-run
./bin/install
```
