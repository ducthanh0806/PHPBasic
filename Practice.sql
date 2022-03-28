-- Câu 1: 
    -- Thông tin những bản ghi của categories và số lượng items của mỗi categories đó
    SELECT categories.*, count.num
    FROM categories
    LEFT JOIN 
    (SELECT category_id, COUNT(id) as num 
    FROM items 
    GROUP BY category_id) as count
    ON categories.id = count.category_id;
        
-- Câu 2:
    -- Thông tin những bản ghi của categories và tổng số amount của các items trong categories đó
    SELECT categories.*, total.amount
    FROM categories
    LEFT JOIN 
    (SELECT category_id, SUM(amount) as amount 
    FROM items 
    GROUP BY category_id) as total
    ON categories.id = total.category_id;

-- Câu 3:
    -- Thông tin những bản ghi của categories mà có ít nhất một items của nó có amount > 40
    SELECT categories.*, items.id, items.amount 
    FROM categories
    LEFT JOIN items
    ON categories.id = items.category_id
    WHERE items.amount > 40;

-- Câu 4: Viết lệnh sql để xóa những categories mà đang không có items nào
    DELETE
    FROM categories
    WHERE id not in
    (SELECT category_id
    FROM items
    WHERE category_id IS NOT NULL);
    