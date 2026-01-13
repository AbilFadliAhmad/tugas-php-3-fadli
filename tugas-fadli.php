<?php 
    // Tugas Array
    echo "<h3>Tugas Array</h3>";
    $nilai = [90,100,50,80,85];
    echo "Semua Nilai: "; 
    foreach ($nilai as $n) echo $n, $n == end($nilai) ? '.' : ', ';
    echo "<br/>Total Nilai: " . array_sum($nilai);
    echo "<br/>Rata-Rata Nilai: " . array_sum($nilai) / count($nilai);


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

    $node1 = new Node(10);  // Node pertama
    $node2 = new Node(20);  // Node kedua
    $node3 = new Node(30);  // Node ketiga

    $head = $node1;          // Node pertama sebagai kepala (head)
    $node1->next = $node2;   // Node 1 menunjuk ke Node 2
    $node2->next = $node3;   // Node 2 menunjuk ke Node 3

    echo "Isi Single Linked List: ";
    $current = $head;

    while ($current != null) {
        echo $current->data;
        
        // Logika untuk menampilkan panah penunjuk
        if ($current->next != null) {
            echo " -> ";
        } else {
            echo " -> NULL";
        }
        
        $current = $current->next; // Berpindah ke node berikutnya
    }


    // Tugas Stack
    echo "<h3>Tugas Stack</h3>";
    $stack = [];

    array_push($stack, 10);
    array_push($stack, 20);
    array_push($stack, 30);

    echo "Stack awal: " . implode(", ", $stack) . "<br>";

    $dataTerhapus = array_pop($stack);

    echo "Data yang dihapus: " . $dataTerhapus . "<br>";

    echo "Isi stack terakhir: ";
    if (empty($stack)) {
        echo "Stack kosong";
    } else {
        // Menampilkan dari atas ke bawah untuk visualisasi stack yang benar
        $tampilanStack = array_reverse($stack); 
        echo implode(", ", $tampilanStack);
    }


    // Tugas QUEUE
    echo "<h3>Tugas QUEUE</h3>";
    $queue = [];

    array_push($queue, "A");
    array_push($queue, "B");
    array_push($queue, "C");

    echo "Queue awal: " . implode(", ", $queue) . "<br>";
    $dataDihapus = array_shift($queue);
    echo "Data yang dihapus: " . $dataDihapus . "<br>";

    echo "Isi queue terakhir: ";
    if (empty($queue)) {
        echo "Antrean kosong";
    } else {
        echo implode(", ", $queue);
    }


    // Tugas TREE
    echo "<h3>Tugas TREE</h3>";
    class Node2 {
        public $data;
        public $left;
        public $right;

        public function __construct($data) {
            $this->data = $data;
            $this->left = null;
            $this->right = null;
        }
    }

    $root = new Node2("Data Root (Pusat)");

    $root->left = new Node2("Data Child Kiri");
    $root->right = new Node2("Data Child Kanan");

    function tampilkanTree($node) {
        if ($node != null) {
            // Tampilkan data node saat ini
            echo $node->data . "<br>";

            // Rekursif ke kiri
            tampilkanTree($node->left);
            
            // Rekursif ke kanan
            tampilkanTree($node->right);
        }
    }

    tampilkanTree($root);


    // Tugas Graph
    echo "<h3>Tugas Graph</h3>";
    class Graph {
        public $adjList = [];

        // Fungsi untuk menambah node
        public function tambahNode($node) {
            $this->adjList[$node] = [];
        }

        // Fungsi untuk menghubungkan antar node (Edge)
        public function tambahHubungan($asal, $tujuan) {
            // Menambahkan tujuan ke daftar tetangga asal
            $this->adjList[$asal][] = $tujuan;
        }

        // Fungsi untuk menampilkan seluruh isi graph
        public function tampilkanGraph() {
            foreach ($this->adjList as $node => $tetangga) {
                echo "Node $node terhubung ke: ";
                if (empty($tetangga)) {
                    echo "Tidak ada";
                } else {
                    echo implode(", ", $tetangga);
                }
                echo "<br>";
            }
        }
    }

    $graph = new Graph();

    $graph->tambahNode("A");
    $graph->tambahNode("B");
    $graph->tambahNode("C");

    $graph->tambahHubungan("A", "B");
    $graph->tambahHubungan("A", "C");

    $graph->tampilkanGraph();


    // Tugas Hash Table
    // Key: NIM (sebagai Hash Key), Value: Nama Mahasantri
    $hashTableMahasantri = [
        "2026001" => "Ahmad Fauzi",
        "2026002" => "Siti Aminah",
        "2026003" => "Budi Rahardjo",
        "2026004" => "Zainab Al-Adawiyah"
    ];

    // Menambahkan data baru ke Hash Table
    $hashTableMahasantri["2026005"] = "Lukman Hakim";

    echo "<h3>Daftar Mahasantri (Hash Table):</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>
            <th>NIM (Key)</th>
            <th>Nama Mahasantri (Value)</th>
        </tr>";

    foreach ($hashTableMahasantri as $nim => $nama) {
        echo "<tr>
                <td>$nim</td>
                <td>$nama</td>
            </tr>";
    }
    echo "</table>";

    $cariNim = "2026002";
    echo "<p><strong>Pencarian NIM $cariNim:</strong> " . $hashTableMahasantri[$cariNim] . "</p>";

?>