



<div class="datacontainer" id="data">
    <form role="form" method="post" action="{$fullurl}/del">
        <input type='hidden' name='chat_id' value='{$chat_id}' />
        <div class='alert alert-danger fade in'>
            <h4>Weet je zeker dat je deze chatbox wil verwijderen?</h4>
            <p>
            Naam van de chat: <b>{$chat_name}</b><br />
            {if isset($god)}Eigenaar van de chat: <b>{$chat_owner}</b><br />{/if}<br />
            </p>
            
            <button class='btn btn-danger' type='submit'>Ja, verwijder deze chatbox</button>
            <a href="{$fullurl}/list" class='btn btn-default'>Nee</a>
        </div>
        
        
    </form>
</div>

