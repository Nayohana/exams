//1 学校インターフェースを命名し作成してください。
//必要なメソッドは以下2つです。
//学校名を文字列で返すメソッド
//最短で卒業した場合の年数を数値型で返すメソッド

<?php 

interface SchoolInterface {
    public function getSchoolName(): string;
    public function getMinimumYearsToGraduate(): int;
}

// 2大学抽象クラスを命名し学校インターフェースを実装する形式で作成してください。
//最短で卒業した場合の年数を数値型で返すメソッドを実装してください。
//※医学部や薬学部ではないものとします。
abstract class University implements SchoolInterface {
    public function getSchoolName(): string {
        return "Unknown University";
    }

    abstract public function getMinimumYearsToGraduate(): int;
}

// 3東京大学クラスを命名し大学抽象クラスを継承する形式で作成してください。
//学校名を文字列で返すメソッドを実装してください。
class UniversityOfTokyo extends University {
    public function getSchoolName(): string {
        return "東京大学";
    }
}

// 4 社員クラスを命名し作成してください。
//クラスに必要なプロパティは以下3つです。

//名前
//年齢
//卒業校
//それぞれコンストラクタで受取り、各プロパティに格納してください。

//クラスに必要なメソッドは以下2つです。

//卒業にかかった年数を卒業にかかった年数は○年です。のフォーマットで文字列を返すメソッド。
//卒業校名を文字列で返すメソッド。
class Employee {
    private $name;
    private $age;
    private $graduatedFrom;

    public function __construct($name, $age, $graduatedFrom) {
        $this->name = $name;
        $this->age = $age;
        $this->graduatedFrom = $graduatedFrom;
    }

    public function getYearsToGraduateString(): string {
        return "卒業にかかった年数は{$this->getMinimumYearsToGraduate()}年です。";
    }

    public function getGraduatedFrom(): string {
        return $this->graduatedFrom;
    }
}


// 5田中クラスを命名し社員クラスを継承する形式で作成してください。
//インスタンス作成時に名前は渡さないようにしてください。("田中"で固定)
//卒業にかかった年数を返すメソッドをオーバーライドし、以下の文字列を返すようにしてください。
//"家庭の事情で卒業に8年かかりました。".
class Tanaka extends Employee {
    public function __construct() {
        parent::__construct("田中", null, null);
    }

    public function getYearsToGraduateString(): string {
        return "家庭の事情で卒業に8年かかりました。";
    }
}

// 6これまで作ったクラスの外側に社員情報表示用の関数を命名し作成してください。
//その関数は社員クラスのインスタンスを引数に受け取り、以下のフォーマットで文字列を出力します。

//私は名前、年齢歳です。
//卒業校を卒業しました。
//卒業にかかった年数を返すメソッドから返された文字列.

//※コンソールで文字列を改行させたい場合PHP_EOLを出力する。
function displayEmployeeInfo(Employee $employee): void {
    echo "私は{$employee->getGraduatedFrom()}卒業しました。" . PHP_EOL;
    echo "卒業にかかった年数を返すメソッドから返された文字列: {$employee->getYearsToGraduateString()}" . PHP_EOL;
}

// 7鈴木さん(29歳、東京大学卒業)の社員クラスをインスタンス化してください。
//作成されたインスタンスを元に社員情報表示用の関数を実行してください。
$suzuki = new Employee("鈴木さん", 29, (new UniversityOfTokyo())->getSchoolName());
displayEmployeeInfo($suzuki);


// 8田中さん(34歳、東京大学卒業)の田中クラスをインスタンス化してください。
作成されたインスタンスを元に社員情報表示用の関数を実行してください。
$tanaka = new Tanaka();
displayEmployeeInfo

?>


