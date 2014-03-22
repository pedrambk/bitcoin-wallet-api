<?php
namespace Headzoo\CoinTalk;

/**
 * Interface for wallet servers
 */
interface IServer
{
    /**
     * Sends a raw query the litecoind rpc
     *
     * Returns an array which contains the server response.
     *
     * Example:
     * <code>
     *  $server = new Server();
     *  $info = $server->query("getinfo");
     *  echo $info["version"];
     *  echo $info["balance"];
     *  echo $info["difficulty"];
     * </code>
     *
     * @param  string $method The method to call
     * @param  array  $params The method parameters
     * @return array
     * @throws JsonException When encoding or decoding the server data fails
     * @throws ServerException When the server returns an error message
     */
    public function query($method, $params = []);
} 