<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Struktur Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .card {
            background: #fff;
            border-radius: 8px;
            border: 2px solid #bbbbbbff;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            margin-bottom: 25px;
            padding: 20px;
        }
        h3 {
            margin-top: 0;
            color: #2c3e50;
            border-bottom: 2px solid #eee;
            padding-bottom: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px 12px;
            text-align: left;
        }
        table th {
            background: #3498db;
            color: #fff;
        }
        .output {
            background: black;
            color: #fff;
            padding: 10px;
            border-radius: 6px;
            margin-top: 10px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h2>Tugas Struktur Data</h2>

    <div class="card">
        <?php 
        // Tugas Array
        echo "<h3>Tugas Array</h3>";
        $nilai = [90,100,50,80,85];
        echo "<div class='output'>";
        echo "Semua Nilai: "; 
        foreach ($nilai as $n) echo $n, $n == end($nilai) ? '.' : ', ';
        echo "<br/>Total Nilai: " . array_sum($nilai);
        echo "<br/>Rata-Rata Nilai: " . array_sum($nilai) / count($nilai);
        echo "</div>";
        ?>
    </div>

    <div class="card">
        <?php 
        // Tugas LinkedList
        echo "<h3>Tugas Linked List</h3>";
        class Node {
            public $data;
            public $next;
            public function __construct($data) {
                $this->data = $data;
                $this->next = null;
            }
        }
        $node1 = new Node(10);
        $node2 = new Node(20);
        $node3 = new Node(30);
        $head = $node1;
        $node1->next = $node2;
        $node2->next = $node3;

        echo "<div class='output'>";
        echo "Isi Single Linked List: ";
        $current = $head;
        while ($current != null) {
            echo $current->data;
            echo $current->next != null ? " -> " : " -> NULL";
            $current = $current->next;
        }
        echo "</div>";
        ?>
    </div>

    <div class="card">
        <?php 
        // Tugas Stack
        echo "<h3>Tugas Stack</h3>";
        $stack = [];
        array_push($stack, 10, 20, 30);
        echo "<div class='output'>";
        echo "Stack awal: " . implode(", ", $stack) . "<br>";
        $dataTerhapus = array_pop($stack);
        echo "Data yang dihapus: " . $dataTerhapus . "<br>";
        echo "Isi stack terakhir: ";
        echo empty($stack) ? "Stack kosong" : implode(", ", array_reverse($stack));
        echo "</div>";
        ?>
    </div>

    <div class="card">
        <?php 
        // Tugas QUEUE
        echo "<h3>Tugas QUEUE</h3>";
        $queue = ["A","B","C"];
        echo "<div class='output'>";
        echo "Queue awal: " . implode(", ", $queue) . "<br>";
        $dataDihapus = array_shift($queue);
        echo "Data yang dihapus: " . $dataDihapus . "<br>";
        echo "Isi queue terakhir: ";
        echo empty($queue) ? "Antrean kosong" : implode(", ", $queue);
        echo "</div>";
        ?>
    </div>

    <div class="card">
        <?php 
            // Tugas TREE
            echo "<h3>Tugas TREE</h3>";

            class Node2 {
                public $data; public $left; public $right;
                public function __construct($data) {
                    $this->data = $data; $this->left = null; $this->right = null;
                }
            }

            $root = new Node2("Data Root (Pusat)");
            $root->left = new Node2("Data Child Kiri");
            $root->right = new Node2("Data Child Kanan");

            // Fungsi untuk menampilkan tree dalam bentuk ASCII pohon
            function tampilkanTreeAscii($node, $prefix = "", $isLeft = true) {
                if ($node == null) return;

                echo $prefix;
                echo $isLeft ? "├── " : "└── ";
                echo $node->data . "\n";

                // Prefix baru untuk anak-anak
                $newPrefix = $prefix . ($isLeft ? "│   " : "    ");
                if ($node->left != null) tampilkanTreeAscii($node->left, $newPrefix, true);
                if ($node->right != null) tampilkanTreeAscii($node->right, $newPrefix, false);
            }

            echo "<div class='output' style='font-family: monospace; white-space: pre;'>";
            // Root ditampilkan manual
            echo $root->data . "\n";
            tampilkanTreeAscii($root->left, "", true);
            tampilkanTreeAscii($root->right, "", false);
            echo "</div>";
        ?>
    </div>


    <div class="card">
        <?php 
        // Tugas Graph
        echo "<h3>Tugas Graph</h3>";
        class Graph {
            public $adjList = [];
            public function tambahNode($node) { $this->adjList[$node] = []; }
            public function tambahHubungan($asal, $tujuan) { $this->adjList[$asal][] = $tujuan; }
            public function tampilkanGraph() {
                foreach ($this->adjList as $node => $tetangga) {
                    echo "Node $node terhubung ke: ";
                    echo empty($tetangga) ? "Tidak ada" : implode(", ", $tetangga);
                    echo "<br>";
                }
            }
        }
        $graph = new Graph();
        $graph->tambahNode("A"); $graph->tambahNode("B"); $graph->tambahNode("C");
        $graph->tambahHubungan("A","B"); $graph->tambahHubungan("A","C");
        echo "<div class='output'>";
        $graph->tampilkanGraph();
        echo "</div>";
        ?>
    </div>

    <div class="card">
        <?php 
        // Tugas Hash Table
        echo "<h3>Daftar Mahasantri (Hash Table)</h3>";
        $hashTableMahasantri = [
            "2026001"=>"Ahmad Fauzi","2026002"=>"Siti Aminah",
            "2026003"=>"Budi Rahardjo","2026004"=>"Zainab Al-Adawiyah"
        ];
        $hashTableMahasantri["2026005"] = "Lukman Hakim";
        echo "<table>";
        echo "<tr><th>NIM (Key)</th><th>Nama Mahasantri (Value)</th></tr>";
        foreach ($hashTableMahasantri as $nim=>$nama) {
            echo "<tr><td>$nim</td><td>$nama</td></tr>";
        }
        echo "</table>";
        $cariNim = "2026002";
        echo "<p><strong>Pencarian NIM $cariNim:</strong> ".$hashTableMahasantri[$cariNim]."</p>";
        ?>
    </div>
</body>
</html>
