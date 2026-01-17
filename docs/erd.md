# Koopa ERD (MVP Draft)

Entities:
- users (UMKM Anggota, Supplier, Group Leader)
- groups
- group_members
- products
- suppliers
- price_ladders
- drop_points
- orders
- escrow_payments
- deliveries

Relationships (ASCII):

```
users 1---* group_members *---1 groups
groups 1---1 products
products 1---1 suppliers
products 1---* price_ladders
groups 1---1 drop_points
groups 1---* orders
orders 1---1 escrow_payments
groups 1---1 deliveries
```

Notes:
- group_members stores join quantity and status (JOINED/PAID/CONFIRMED).
- orders can represent one order per UMKM per group.
- escrow_payments links to orders and stores payment state.
- deliveries store supplier drop to Poin A and proof photo.
