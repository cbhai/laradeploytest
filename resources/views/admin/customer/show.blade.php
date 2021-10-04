@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.customer.title_singular') }}:
                    {{ trans('cruds.customer.fields.id') }}
                    {{ $customer->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.customer.fields.id') }}
                            </th>
                            <td>
                                {{ $customer->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.customer.fields.name') }}
                            </th>
                            <td>
                                {{ $customer->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.customer.fields.email') }}
                            </th>
                            <td>
                                {{ $customer->email }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('customer_edit')
                    <a href="{{ route('admin.customers.edit', $customer) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection