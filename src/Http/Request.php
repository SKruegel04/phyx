<?php

declare(strict_types=1);

namespace Phyx\Http;

use http\Encoding\Stream;

class Request {
    private string $protocolVersion = "1.1";
    private array $headers = [];
    private array $headerNames = [];

    public function getProtocolVersion(): string
    {
       return $this->protocolVersion;
    }

    public function withProtocolVersion(string $version):static
    {
        $request = clone $this;
        $request->protocolVersion = $version;
        return $request;
    }

    public function getHeaders(): array
    {
        $headers = [];
        foreach ($this->headers as $name => $values) {
            $headerName = $this->headerNames[$name];
            $headers[$headerName] = $values;
        }
        return $headers;
    }

    public function hasHeader(): bool
    {

    }

    public function getHeader(string $name): array
    {

    }

    public function getHeaderLine(string $name): string
    {

    }

    public function withHeader(string $name, string|array $value): static
    {

    }

    public function withAddedHeader(string $name, string|array $value): static
    {

    }

    public function withoutHeader(string $name): static
    {

    }

    public function getBody(): Stream
    {

    }

    public function withBody(Stream $stream): static
    {

    }

    public function getRequestTarget(): string
    {

    }

    public function withRequestTarget(string $requestTarget): static
    {

    }

    public function getMethod(): string
    {

    }

    public function withMethod(string $method): static
    {

    }

    public function getUri(): Uri
    {

    }

    public function withUri(Uri $uri, bool $preserveHost = false)
    {

    }




}

