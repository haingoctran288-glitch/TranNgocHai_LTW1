<?php
class Student {
    public $studentId;
    public $fullName;
    public $gender;
    public $birthYear;
    public $scoreHtml;
    public $scoreCss;
    public $scorePhp;

    public function __construct($studentId, $fullName, $gender, $birthYear, $scoreHtml, $scoreCss, $scorePhp) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->scoreHtml = $scoreHtml;
        $this->scoreCss = $scoreCss;
        $this->scorePhp = $scorePhp;
    }

    public function getTotalScore() {
        return $this->scoreHtml + $this->scoreCss + $this->scorePhp;
    }

    public function getAge() {
        $currentYear = date("Y");
        return $currentYear - $this->birthYear;
    }

    public function getAverage() {
        return $this->getTotalScore() / 3;
    }

    public function getRank() {
        $avg = $this->getAverage();
        if ($avg >= 9.0) return "Xuất sắc";
        if ($avg >= 8.0) return "Giỏi";
        if ($avg >= 6.5) return "Khá";
        if ($avg >= 5.0) return "Trung bình";
        return "Yếu";
    }

    public function getScholarship() {
        $rank = $this->getRank();
        if ($rank == "Xuất sắc" || $rank == "Giỏi") {
            return "Có học bổng";
        }
        return "";
    }

    public function showInfo() {
        $rank = $this->getRank();
        $rowClass = "";
        
        if ($rank == "Xuất sắc") $rowClass = "table-success";
        elseif ($rank == "Giỏi") $rowClass = "table-info";
        elseif ($rank == "Khá") $rowClass = "table-primary";
        elseif ($rank == "Trung bình") $rowClass = "table-warning";
        else $rowClass = "table-danger";

        echo "<tr class='$rowClass'>";
        echo "<td>{$this->studentId}</td>";
        echo "<td>{$this->fullName}</td>";
        echo "<td>{$this->gender}</td>";
        echo "<td>{$this->birthYear}</td>";
        echo "<td>{$this->getAge()}</td>";
        echo "<td>{$this->scoreHtml}</td>";
        echo "<td>{$this->scoreCss}</td>";
        echo "<td>{$this->scorePhp}</td>";
        echo "<td>" . round($this->getTotalScore(), 1) . "</td>";
        echo "<td>" . round($this->getAverage(), 2) . "</td>";
        echo "<td>{$rank}</td>";
        echo "<td>{$this->getScholarship()}</td>";
        echo "</tr>";
    }
}
?>
