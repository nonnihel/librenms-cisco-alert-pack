# Regluskrá

## Virkar sjálfgefið

- **Averna Cisco - Device Down** — Critical
- **Averna Cisco - Device Recently Rebooted** — Warning
- **Averna Cisco - BGP Session Down** — Critical
- **Averna Cisco - BGP Session Recently Re-established** — Warning
- **Averna Cisco - Critical Interface Down** — Critical; aðeins port með `[ALERT]` í ifAlias
- **Averna Cisco - Hardware Sensor Outside Critical Limits** — Critical
- **Averna Cisco - Optical RX-TX Outside Critical Limits** — Critical
- **Averna Cisco - Temperature Outside Critical Limits** — Critical

## Óvirkar sjálfgefið

- **Averna Cisco - Interface Error Counter Increasing** — prófa þarf delta-field á viðkomandi LibreNMS-útgáfu
- **Averna Cisco - High Processor Usage** — CPU-gögn geta verið mismunandi milli IOS, IOS XE og NX-OS

## Stuðningur

Reglurnar eru miðaðar við Cisco IOS, IOS XE og NX-OS og eiga því við ASR, Catalyst og Nexus þar sem LibreNMS hefur uppgötvað viðkomandi entities og sensors.
