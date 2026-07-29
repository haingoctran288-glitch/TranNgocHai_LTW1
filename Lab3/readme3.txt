- Khi nào nên sử dụng Function, khi nào nên sử dụng Class và Object:
+ Function: Em nghĩ nên dùng khi chỉ cần làm một việc nhỏ nhỏ, tính toán lặt vặt như tính tổng tiền hay đổi định dạng chữ. Nó nhanh và dễ hiểu.
+ Class và Object: Dùng khi code bắt đầu nhiều lên và phức tạp. Ví dụ muốn quản lý nguyên 1 đối tượng "Sinh Viên" có chứa tên, tuổi, điểm số (thuộc tính) và các phép tính xếp loại (phương thức) thì gom vào 1 Class cho dễ quản lý. Nó giống như tạo ra 1 cái khuôn đúc.

- Giải thích ý nghĩa từ khóa $this trong lớp:
Từ khóa $this dùng để chỉ đích danh cái đối tượng hiện tại đang chạy. Kiểu như nó đang tự xưng "bản thân tôi". Khi em viết $this->fullName tức là đoạn code đó đang nói "lấy cái tên của tôi ra đây".

- Cho biết ý nghĩa của toán tử mũi tên (->):
Cái mũi tên này giống như chìa khóa để chọc vào bên trong đối tượng. Có cái đối tượng rồi, muốn gọi điểm số hay gọi hàm của nó thì phải xài mũi tên.
Ví dụ: $student->getAverage() (Nghĩa là bắt đối tượng student chạy hàm tính điểm trung bình).

- Nêu lợi ích của việc tái sử dụng phương thức (Method Reuse):
Giúp mình làm biếng gõ code lại nhiều lần. Ví dụ cái hàm tính điểm trung bình, em chỉ viết 1 lần bên trong Class Student. Ở ngoài file giao diện có tận 20 sinh viên thì em cứ gọi hàm đó ra xài lại 20 lần là xong. Rất khỏe. Sau này cô có đổi cách tính thì em chỉ vô đúng 1 chỗ trong Class sửa 1 dòng là cả 20 đứa kia tự đổi theo. Không lo sửa sót!
