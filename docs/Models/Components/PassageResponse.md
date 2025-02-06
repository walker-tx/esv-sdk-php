# PassageResponse


## Fields

| Field                                                                   | Type                                                                    | Required                                                                | Description                                                             |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `query`                                                                 | *?string*                                                               | :heavy_minus_sign:                                                      | The passage reference that was requested                                |
| `canonical`                                                             | *?string*                                                               | :heavy_minus_sign:                                                      | The canonical version of the passage reference                          |
| `parsed`                                                                | array<array<*int*>>                                                     | :heavy_minus_sign:                                                      | Array of parsed passage references                                      |
| `passageMeta`                                                           | array<[Components\PassageMeta](../../Models/Components/PassageMeta.md)> | :heavy_minus_sign:                                                      | N/A                                                                     |
| `passages`                                                              | array<*string*>                                                         | :heavy_minus_sign:                                                      | Array of formatted passage text                                         |