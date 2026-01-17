# Koopa Group State Machine (MVP)

```
OPEN
  | (cut-off reached, lock price & volume)
  v
LOCKED
  | (UMKM payments complete)
  v
PAID
  | (supplier delivers to drop point)
  v
DELIVERED
  | (UMKM confirm receipt)
  v
COMPLETED
```

Rules:
- 1 group = 1 product, 1 supplier, 1 drop point.
- Escrow is mandatory; cut-off auto locks.
- Koopa releases escrow after UMKM confirmation.
- No stock, no warehouse, no distributor, no last-mile logistics.
