 <?php
    require 'login.kontrol.php';
    require 'sayfa.ust.php';

    require_once('db.php');

    $SORGU = $DB->prepare("SELECT * FROM birimler ORDER BY birimadi");
    $SORGU->execute();
    $kullanicilar = $SORGU->fetchAll(PDO::FETCH_ASSOC);

    $optionbirimler = "";

    foreach ($birimler as $birim) {

        $optionbirimler.= $birim['birimadi'];
    }
    ?>
    
    <form action="" method='POST'>
    <p>    
        Lustfen talebiniz acik bicimde yaziniz. <br>
        Gorevli arkadaslarimiz en kisa zamanda sizinle iletisime gececektir.
    </p>
    <textarea name="talep_form" style='width: 600px, height: 300px'></textarea>
    <p>Hedef Birim
        <select name="hedefbirim_form" id="">
            <?php echo $optionbirimler ?>
        </select>
    </p>
    <p>
        <select name="aciliyet_form" id="">
            <option value="0">Normal</option>
            <option value="1">Acil</option>
            <option value="2">Kritik</option>
        </select>
    </p>
    <input href='' type="submit" value='Talebimi Gonder'></input>
</form>

<?php require_once 'sayfa.alt.php'; ?>