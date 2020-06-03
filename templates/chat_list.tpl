{literal}
<script>
    $(document).ready(function() {
        $('input[type="checkbox"]').bootstrapSwitch();
        $('input').tooltip({placement:'auto',animation:true});
        $('label').tooltip({placement:'auto',animation:true});
        $("#myTab a").click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        });
    });



</script>
{/literal}

<div class="datacontainer" id="data">
    {if {$ids|@count} > 0}
    <table class="table table-hover">
        <tr>
            <td><strong>ID</strong></td><td><strong>Naam</strong></td>{if isset($god)}<td><strong>Eigenaar</strong></td><td><strong>Aantal keer bezocht</strong></td><td><strong>Laatst bezocht</strong></td>{/if}<td><strong>Acties</strong></td>
        </tr>

        {section name=chat loop=$ids}
            <tr>
                <td><span class="badge">{$ids[chat]}</span></td><td>{$names[chat]}</td>{if isset($god)}<td>{$owners[chat]}</td><td>{$calls[chat]}</td><td>{$lastcalleds[chat]}</td>{/if}
                <td>
                    <a href="{$fullurl}/chat.php?id={$ids[chat]}" target='_blank' class="btn btn-success btn-xs"><span class="glyphicon glyphicon-paperclip"></span></a>
                    <a href="{$fullurl}/edit/{$ids[chat]}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-cog"></span></a>
                    <a href="{$fullurl}/transfer/{$ids[chat]}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-user"></span></a>
                    <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#apiToolkit{$ids[chat]}"><span class="glyphicon glyphicon-briefcase"></span></a>
                    <a href="{$fullurl}/del/{$ids[chat]}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>

            <!-- Chatbox HTML Codes -->
            <div class="modal fade" id="apiToolkit{$ids[chat]}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Chatbox HTML codes</h4>
                        </div>
                        <div class="modal-body">
                            <h5>Je chatbox op je website plaatsen</h5>
                            Als je je chatbox op je website wil plaatsen, kan je dit doen met het volgende stukje HTML code:
                            <blockquote><pre class="text-left">&lt;iframe src='{$fullurl}/chat.php?id={$ids[chat]}' width='710' height='500' framespacing='0' frameborder='no' scrolling='no' &gt;&lt;/iframe&gt;</pre></blockquote>

                            <h5>Het aantal chatters op je website laten zien</h5>
                            Om het aantal chatters dat zich in je chatbox bevindt op je site weer te geven, plaats je het volgende stukje javascript code tussen de <code>&lt;HEAD&gt;</code> tags van je webpagina.
<blockquote><pre class="text-left">&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"&gt;&lt;/script&gt;
&lt;script&gt;
  $(document).ready(function() {
    $.get('https://chattersworld.nl/usercount.php?channel={$names[chat]}', function(data) {
      $("#users").html(data);
    }, 'text');
});
&lt;/script&gt;</pre></blockquote>
                            Zet vervolgens tussen de <code>&lt;BODY&gt;</code> tags op de plaats waar je het chattersaantal wil hebben een HTML-element met het id users, bijvoorbeeld:
                            <blockquote><pre class="text-left">&lt;p&gt;Aantal Chatters: &lt;span id="users"&gt;&lt;/span&gt;&lt;/p&gt;</pre></blockquote>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        {/section}
    </table>
    {else}
        <a href="{$fullurl}/new" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span> Nieuwe chatbox aanmaken</a>
    {/if}

</div>
