<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="modal-show-{{ $athlet->user_id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 60%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">My Metrics</h5>

            </div>
            <div class="modal-body">



                <?php
                
                $athlete_metric = $athlet->athletemetric;
                
                ?>




                @if (count($athlete_metric) == 0)
                    <p class="text-center">No data to display</p>
                @else
                    <table class="table text-center">

                        <thead class="thead-dark">

                            <tr>
                                <th>Max. Velocity</th>
                                <th>Max. Throwing Vel.</th>
                                <th>Blast Plane Score</th>
                                <th>Blast Connection Score</th>
                                <th>Blast Rotation Score</th>
                                <th>Max Fb. Spin Rate</th>
                                <th>Ave. Fb. Spin Rate</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($athlete_metric as $metric)
                                <tr>
                                    <td>{{ $metric->max_velocity }}</td>
                                    <td>{{ $metric->max_throwing_velocity }}</td>
                                    <td>{{ $metric->blast_plane_score }}</td>
                                    <td>{{ $metric->blast_connection_score }}</td>
                                    <td>{{ $metric->blast_rotation_score }}</td>
                                    <td>{{ $metric->max_fb_spin_rate }}</td>
                                    <td>{{ $metric->ave_fb_spin_rate }}</td>
                                </tr>
                            @endforeach
                @endif
                </tbody>
                </table>

                <!-- Fin Tabla Productos -->




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
