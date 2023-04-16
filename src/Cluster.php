<?php

/**
 * ProxmoxVE PHP API
 *
 * @copyright 2017 Saleh <Saleh7@protonmail.ch>
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace Proxmox;

// /api2/json/cluster
class Cluster
{
  /**
    * Cluster index.
    * GET /api2/json/cluster
  */
  public static function Cluster()
  {
      return Request::Request("/cluster");
  }
  /**
    * List vzdump backup schedule.
    * GET /api2/json/cluster/backup
  */
  public static function ListBackup()
  {
      return Request::Request("/cluster/backup");
  }
  /**
    * Create new vzdump backup job.
    * POST /api2/json/cluster/backup
    * @param array    $data
  */
  public static function createBackup($data = array())
  {
      return Request::Request("/cluster/backup", $data, 'POST');
  }
  /**
    * Read vzdump backup job definition.
    * GET /api2/json/cluster/backup/{id}
    * @param string   $id    The job ID.
  */
  public static function BackupId($id)
  {
      return Request::Request("/cluster/backup/$id");
  }
  /**
    * Update vzdump backup job definition.
    * PUT /api2/json/cluster/backup/{id}
    * @param string   $id    The job ID.
    * @param array    $data
  */
  public static function updateBackup($id, $data = array())
  {
      return Request::Request("/cluster/backup/$id", $data, 'PUT');
  }
  /**
    * Delete vzdump backup job definition.
    * DELETE /api2/json/cluster/backup/{id}
    * @param string   $id    The job ID.
  */
  public static function deleteBackup($id)
  {
      return Request::Request("/cluster/backup/$id", null, 'DELETE');
  }
  /**
    * Read vzdump backup job definition.
    * GET /api2/json/cluster/config
  */
  public static function Config()
  {
      return Request::Request("/cluster/config");
  }
  /**
    * Corosync node list.
    * GET /api2/json/cluster/config/nodes
  */
  public static function listConfigNodes()
  {
      return Request::Request("/cluster/config/nodes");
  }
  /**
    * Get corosync totem protocol settings.
    * GET /api2/json/cluster/config/totem
  */
  public static function configTotem()
  {
      return Request::Request("/cluster/config/totem");
  }
  /**
    * Directory index.
    * GET /api2/json/cluster/firewall
  */
  public static function Firewall()
  {
      return Request::Request("/cluster/firewall");
  }
  /**
    * List aliases
    * GET /api2/json/cluster/firewall/aliases
  */
  public static function firewallListAliases()
  {
      return Request::Request("/cluster/firewall/aliases");
  }
  /**
    * Create IP or Network Alias.
    * POST /api2/json/cluster/firewall/aliases
    * @param array    $data
  */
  public static function createFirewallAliase($data = array())
  {
      return Request::Request("/cluster/firewall/aliases", $data, 'POST');
  }
  /**
    * Read alias.
    * GET /api2/json/cluster/firewall/aliases/{name}
    * @param string   $name    Alias name.
  */
  public static function getFirewallAliasesName($name)
  {
      return Request::Request("/cluster/firewall/aliases/$name");
  }
  /**
    * Update IP or Network alias.
    * PUT /api2/json/cluster/firewall/aliases/{name}
    * @param string   $name    Alias name.
    * @param array    $data
  */
  public static function updateFirewallAliase($name, $data = array())
  {
      return Request::Request("/cluster/firewall/aliases/$name", $data, 'PUT');
  }
  /**
    * Update IP or Network alias.
    * PUT /api2/json/cluster/firewall/aliases/{name}
    * @param string   $name    Alias name.
  */
  public static function removeFirewallAliase($name)
  {
      return Request::Request("/cluster/firewall/aliases/$name", null, 'DELETE');
  }
  /**
    * List security groups.
    * GET /api2/json/cluster/firewall/groups
  */
  public static function firewallListGroups()
  {
      return Request::Request("/cluster/firewall/groups");
  }
  /**
    * Create new security group.
    * POST /api2/json/cluster/firewall/groups
    * @param array    $data
  */
  public static function createFirewallGroup($data = array())
  {
      return Request::Request("/cluster/firewall/groups", $data, 'POST');
  }
  /**
    * List rules
    * GET /api2/json/cluster/firewall/groups/{group}
    * @param string   $group    Security Group name.
  */
  public static function firewallGroupsGroup($group)
  {
      return Request::Request("/cluster/firewall/groups/$group");
  }
  /**
    * Create new rule.
    * POST /api2/json/cluster/firewall/groups/{group}
    * @param string   $group    Security Group name.
    * @param array    $data
  */
  public static function createRuleFirewallGroup($group, $data = array())
  {
      return Request::Request("/cluster/firewall/groups/$group", $data, 'POST');
  }
  /**
    * Delete security group.
    * PUT /api2/json/cluster/firewall/aliases/{name}
    * @param string   $group    Security Group name.
  */
  public static function removeFirewallGroup($group)
  {
      return Request::Request("/cluster/firewall/groups/$group", null, 'DELETE');
  }
  /**
    * Get single rule data.
    * GET /api2/json/cluster/firewall/groups/{group}/{pos}
    * @param string   $group    Security Group name.
    * @param integer  $pos      Update rule at position <pos>.
  */
  public static function firewallGroupsGroupPos($group, $pos)
  {
      return Request::Request("/cluster/firewall/groups/$group/$pos");
  }
  /**
    * Modify rule data
    * PUT /api2/json/cluster/firewall/groups/{group}/{pos}
    * @param string   $group    Security Group name.
    * @param integer  $pos      Update rule at position <pos>.
    * @param array    $data
  */
  public static function setFirewallGroupPos($group, $pos, $data = array())
  {
      return Request::Request("/cluster/firewall/groups/$group/$pos", $data, 'PUT');
  }
  /**
    * Delete rule.
    * DELETE /api2/json/cluster/firewall/groups/{group}/{pos}
    * @param string   $group    Security Group name.
    * @param integer  $pos      Update rule at position <pos>.
  */
  public static function removeFirewallGroupPos($group, $pos)
  {
      return Request::Request("/cluster/firewall/groups/$group/$pos", null, 'DELETE');
  }
  /**
    * List IPSets
    * GET /api2/json/cluster/firewall/ipset
  */
  public static function firewallListIpset()
  {
      return Request::Request("/cluster/firewall/ipset");
  }
  /**
    * Create new IPSet
    * POST /api2/json/cluster/firewall/ipset
    * @param array    $data
  */
  public static function createFirewallIpset($data = array())
  {
      return Request::Request("/cluster/firewall/ipset", $data, 'POST');
  }
  /**
    * List IPSet content
    * GET /api2/json/cluster/firewall/ipset/{name}
    * @param string   $name    IP set name.
  */
  public static function firewallIpsetName($name)
  {
      return Request::Request("/cluster/firewall/ipset/$name");
  }
  /**
    * Add IP or Network to IPSet.
    * GET /api2/json/cluster/firewall/ipset/{name}
    * @param string   $name    IP set name.
    * @param array    $data
  */
  public static function addFirewallIpsetName($name, $data = array())
  {
      return Request::Request("/cluster/firewall/ipset/$name", $data, 'POST');
  }
  /**
    * Delete IPSet
    * GET /api2/json/cluster/firewall/ipset/{name}
    * @param string   $name    IP set name.
  */
  public static function deleteFirewallIpsetName($name)
  {
      return Request::Request("/cluster/firewall/ipset/$name", null, 'DELETE');
  }
  /**
    * List rules.
    * GET /api2/json/cluster/firewall/rules
  */
  public static function firewallListRules()
  {
      return Request::Request("/cluster/firewall/rules");
  }
  /**
    * Create new rule.
    * GET /api2/json/cluster/firewall/rules
    * @param array    $data
  */
  public static function createFirewallRules($data = array())
  {
      return Request::Request("/cluster/firewall/rules", $data, 'POST');
  }
  /**
    * Get single rule data.
    * GET /api2/json/cluster/firewall/rules/{pos}
    * @param integer  $pos      Update rule at position <pos>.
  */
  public static function firewallRulesPos($pos)
  {
      return Request::Request("/cluster/firewall/rules/$pos");
  }
  /**
    * Modify rule data.
    * PUT /api2/json/cluster/firewall/rules/{pos}
    * @param integer  $pos      Update rule at position <pos>.
    * @param array    $data
  */
  public static function setFirewallRulesPos($pos, $data = array())
  {
      return Request::Request("/cluster/firewall/rules/$pos", $data, 'PUT');
  }
  /**
    * Delete rule.
    * DELETE /api2/json/cluster/firewall/rules/{pos}
    * @param integer  $pos      Update rule at position <pos>.
  */
  public static function deleteFirewallRulesPos($pos)
  {
      return Request::Request("/cluster/firewall/rules/$pos", null, 'DELETE');
  }
  /**
    * List available macros
    * GET /api2/json/cluster/firewall/macros
  */
  public static function firewallListMacros()
  {
      return Request::Request("/cluster/firewall/macros");
  }
  /**
    * Get Firewall options.
    * GET /api2/json/cluster/firewall/options
  */
  public static function firewallListOptions()
  {
      return Request::Request("/cluster/firewall/options");
  }
  /**
    * Set Firewall options.
    * PUT /api2/json/cluster/firewall/options
    * @param array    $data
  */
  public static function setFirewallOptions($data = array())
  {
      return Request::Request("/cluster/firewall/options", $data, 'PUT');
  }
  /**
    * Lists possible IPSet/Alias reference which are allowed in source/dest properties.
    * GET /api2/json/cluster/firewall/refs
  */
  public static function firewallListRefs()
  {
      return Request::Request("/cluster/firewall/refs");
  }
  /**
    * Get HA groups.
    * GET /api2/json/cluster/ha/groups
  */
  public static function getHaGroups()
  {
      return Request::Request("/cluster/ha/groups");
  }
  /**
    * Read ha group configuration.
    * GET /api2/json/cluster/ha/groups/{group}
    * @param string   $group      The HA group identifier.
  */
  public static function HaGroups($group)
  {
      return Request::Request("/cluster/ha/groups/$group");
  }
  /**
    * List HA resources.
    * GET /api2/json/cluster/ha/resources
  */
  public static function HaResources()
  {
      return Request::Request("/cluster/ha/resources");
  }
  /**
    * Create HA resource.
    * POST /api2/json/cluster/ha/resources
    * @param array    $data
  */
  public static function createHaResource($data)
  {
      return Request::Request("/cluster/ha/resources", $data, "POST");
  }

  /**
    * Get HA resource.
    * GET /api2/json/cluster/ha/resources/{sid}
    * @param string $sid HA resource ID. This consists of a resource type followed by a resource specific name, separated with colon (example: vm:100 / ct:100).
    * @param array $data
  */
  public static function getHaResource($sid)
  {
      return Request::Request("/cluster/ha/resources/{$sid}", null, "PUT");
  }

  /**
    * Update HA resource.
    * PUT /api2/json/cluster/ha/resources/{sid}
    * @param string $sid HA resource ID. This consists of a resource type followed by a resource specific name, separated with colon (example: vm:100 / ct:100).
    * @param array $data
  */
  public static function updateHaResource($sid, $data)
  {
      return Request::Request("/cluster/ha/resources/{$sid}", $data, "PUT");
  }
  
  /**
    * Delete HA resource.
    * DELETE /api2/json/cluster/ha/resources/{sid}
    * @param string $sid HA resource ID. This consists of a resource type followed by a resource specific name, separated with colon (example: vm:100 / ct:100).
  */
  public static function deleteHaResource($sid)
  {
      return Request::Request("/cluster/ha/resources/{$sid}", null, "DELETE");
  }
  
  /**
    * Request resource migration (online) to another node.
    * POST /api2/json/cluster/ha/resources/{sid}/migrate
    * @param string $sid HA resource ID. This consists of a resource type followed by a resource specific name, separated with colon (example: vm:100 / ct:100).
    * @param array $data
  */
  public static function migrateHaResource($sid, $data)
  {
      return Request::Request("/cluster/ha/resources/{$sid}/migrate", $data, "POST");
  }

  /**
    * Request resource relocatzion to another node. This stops the service on the old node, and restarts it on the target node.
    * POST /api2/json/cluster/ha/resources/{sid}/relocate
    * @param string $sid HA resource ID. This consists of a resource type followed by a resource specific name, separated with colon (example: vm:100 / ct:100).
    * @param array $data
  */
  public static function relocateHaResource($sid, $data)
  {
      return Request::Request("/cluster/ha/resources/{$sid}/relocate", $data, "POST");
  }

  /**
    * List replication jobs.
    * GET /api2/json/cluster/replication
  */
  public static function Replication()
  {
      return Request::Request("/cluster/replication");
  }
  /**
    * Create a new replication job
    * POST /api2/json/cluster/replication
    * @param array    $data
  */
  public static function createReplication($data = array())
  {
      return Request::Request("/cluster/replication", $data, "POST");
  }
  /**
    * Read replication job configuration.
    * GET /api2/json/cluster/replication/{id}
    * @param string   $id     Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '<GUEST>-<JOBNUM>'.
  */
  public static function replicationId($id)
  {
      return Request::Request("/cluster/replication/$id");
  }
  /**
    * Update replication job configuration.
    * PUT /api2/json/cluster/replication/{id}
    * @param string   $id     Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '<GUEST>-<JOBNUM>'.
    * @param array    $data
  */
  public static function updateReplication($id, $data = array())
  {
      return Request::Request("/cluster/replication/$id", $data, "PUT");
  }
  /**
    * Mark replication job for removal.
    * DELETE /api2/json/cluster/replication/{id}
    * @param string   $id     Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '<GUEST>-<JOBNUM>'.
  */
  public static function deleteReplication($id)
  {
      return Request::Request("/cluster/replication/$id", null, "DELETE");
  }
  /**
    * Read cluster log
    * GET /api2/json/cluster/log
    * @param integer  $max     Maximum number of entries.
  */
  public static function Log($max = null)
  {
      $optional['max'] = !empty($max) ? $max : null;
      return Request::Request("/cluster/log", $optional);
  }
  /**
    * Get next free VMID. If you pass an VMID it will raise an error if the ID is already used.
    * GET /api2/json/cluster/nextid
    * @param integer  $vmid     The (unique) ID of the VM.
  */
  public static function nextVmid($vmid = null)
  {
      $optional['vmid'] = !empty($vmid) ? $vmid : null;
      return Request::Request("/cluster/nextid", $optional);
  }
  /**
    * Get datacenter options.
    * GET /api2/json/cluster/options
  */
  public static function Options()
  {
      return Request::Request("/cluster/options");
  }
  /**
    * Set datacenter options.
    * PUT /api2/json/cluster/options
    * @param array    $data
  */
  public static function setOptions($data = array())
  {
      return Request::Request("/cluster/options", $data, "PUT");
  }
  /**
    * Resources index (cluster wide).
    * GET /api2/json/cluster/resources
    * @param enum     $type    vm | storage | node
  */
  public static function Resources($type = null)
  {
      $optional['type'] = !empty($type) ? $type : null;
      return Request::Request("/cluster/resources", $optional);
  }
  /**
    * Get cluster status informations.
    * GET /api2/json/cluster/status
  */
  public static function Status()
  {
      return Request::Request("/cluster/status");
  }
  /**
    * List recent tasks (cluster wide).
    * GET /api2/json/cluster/tasks
  */
  public static function Tasks()
  {
      return Request::Request("/cluster/tasks");
  }
  
  /* SDN Controllers */
  /**
    * SDN controllers index.
    * GET /api2/json/cluster/sdn/controllers
  */
  public static function getControllers()
  {
      return Request::Request("/cluster/sdn/controllers");
  }
    
  /**
    * Create a new sdn controller object.
    * POST /api2/json/cluster/sdn/controllers/{id}
  */
  public static function createController($data = array())
  {
      return Request::Request("/cluster/sdn/controllers/", $data, "POST");
  }

  /**
    * Read sdn controller configuration.
    * GET /api2/json/cluster/sdn/controllers/{id}
    * @param integer $id The (unique) ID of the controller.
  */
  public static function getController($id)
  {
      return Request::Request("/cluster/sdn/controllers/{$id}");
  }
  
  /**
    * Update sdn controller object configuration.
    * PUT /api2/json/cluster/sdn/controllers/{id}
    * @param integer $id The (unique) ID of the controller.
  */
  public static function updateController($id, $data = array())
  {
      return Request::Request("/cluster/sdn/controllers/{$id}", $data, "PUT");
  }
  
  /**
    * Update sdn controller object configuration.
    * PUT /api2/json/cluster/sdn/controllers/{id}
    * @param integer $id The (unique) ID of the controller.
  */
  public static function deleteController($id)
  {
      return Request::Request("/cluster/sdn/controllers/{$id}", null, "DELETE");
  }

  /* SDN DNS */
  /**
    * SDN dns index.
    * GET /api2/json/cluster/sdn/dns
  */
  public static function getDNSs()
  {
      return Request::Request("/cluster/sdn/dns");
  }
    
  /**
    * Create a new sdn dns object.
    * POST /api2/json/cluster/sdn/dns/{id}
  */
  public static function createDNS($data = array())
  {
      return Request::Request("/cluster/sdn/dns", $data, "POST");
  }

  /**
    * Read sdn dns configuration.
    * GET /api2/json/cluster/sdn/dns/{id}
    * @param integer $id The (unique) ID of the dns.
  */
  public static function getDNS($id)
  {
      return Request::Request("/cluster/sdn/dns/{$id}");
  }
  
  /**
    * Update sdn dns object configuration.
    * PUT /api2/json/cluster/sdn/dns/{id}
    * @param integer $id The (unique) ID of the dns.
  */
  public static function updateDNS($id, $data = array())
  {
      return Request::Request("/cluster/sdn/dns/{$id}", $data, "PUT");
  }
  
  /**
    * Delete sdn dns object configuration.
    * PUT /api2/json/cluster/sdn/dns/{id}
    * @param integer $id The (unique) ID of the dns.
  */
  public static function deleteDNS($id)
  {
      return Request::Request("/cluster/sdn/dns/{$id}", null, "DELETE");
  }

  /* SDN IPAMS */
  /**
    * SDN ipams index.
    * GET /api2/json/cluster/sdn/ipams
  */
  public static function getIPAMs()
  {
      return Request::Request("/cluster/sdn/ipams");
  }
    
  /**
    * Create a new sdn ipam object.
    * POST /api2/json/cluster/sdn/ipams/{id}
  */
  public static function createIPAM($data = array())
  {
      return Request::Request("/cluster/sdn/ipams", $data, "POST");
  }

  /**
    * Read sdn ipam configuration.
    * GET /api2/json/cluster/sdn/ipams/{id}
    * @param integer $id The (unique) ID of the ipam.
  */
  public static function getIPAM($id)
  {
      return Request::Request("/cluster/sdn/ipams/{$id}");
  }
  
  /**
    * Update sdn ipam object configuration.
    * PUT /api2/json/cluster/sdn/ipams/{id}
    * @param integer $id The (unique) ID of the ipam.
  */
  public static function updateIPAM($id, $data = array())
  {
      return Request::Request("/cluster/sdn/ipams/{$id}", $data, "PUT");
  }
  
  /**
    * Delete sdn ipam object configuration.
    * PUT /api2/json/cluster/sdn/ipams/{id}
    * @param integer $id The (unique) ID of the ipam.
  */
  public static function deleteIPAM($id)
  {
      return Request::Request("/cluster/sdn/ipams/{$id}", null, "DELETE");
  }

  /* SDN vNets */
  /**
    * Directory index.
    * GET /api2/json/cluster/sdn
  */
  public static function getSDN()
  {
      return Request::Request("/cluster/sdn");
  }
  
  /**
    * Apply sdn controller changes && reload.
    * PUT /api2/json/cluster/sdn
    * @param integer $id The (unique) ID of the vnet.
  */
  public static function updateSDN()
  {
      return Request::Request("/cluster/sdn", null, "PUT");
  }

  /**
    * SDN vnets index.
    * GET /api2/json/cluster/sdn/vnets
  */
  public static function getvNets()
  {
      return Request::Request("/cluster/sdn/vnets");
  }
    
  /**
    * Create a new sdn vnet object.
    * POST /api2/json/cluster/sdn/vnets/{id}
  */
  public static function createvNet($data = array())
  {
      return Request::Request("/cluster/sdn/vnets", $data, "POST");
  }

  /**
    * Read sdn vnet configuration.
    * GET /api2/json/cluster/sdn/vnets/{id}
    * @param integer $id The (unique) ID of the vnet.
  */
  public static function getvNet($id)
  {
      return Request::Request("/cluster/sdn/vnets/{$id}");
  }
  
  /**
    * Update sdn vnet object configuration.
    * PUT /api2/json/cluster/sdn/vnets/{id}
    * @param integer $id The (unique) ID of the vnet.
  */
  public static function updatevNet($id, $data = array())
  {
      return Request::Request("/cluster/sdn/vnets/{$id}", $data, "PUT");
  }
  
  /**
    * Delete sdn vnet object configuration.
    * PUT /api2/json/cluster/sdn/vnets/{id}
    * @param integer $id The (unique) ID of the vnet.
  */
  public static function deletevNet($id)
  {
      return Request::Request("/cluster/sdn/vnets/{$id}", null, "DELETE");
  }

  /* SDN subnets */
  /**
    * SDN subnets index.
    * GET /api2/json/cluster/sdn/vnets/subnets
    * @param integer $vnet The (unique) ID of the vnet.
  */
  public static function getSubnets($vnet)
  {
      return Request::Request("/cluster/sdn/vnets/{$vnet}/subnets");
  }
    
  /**
    * Create a new sdn vnet object.
    * POST /api2/json/cluster/sdn/vnets/{id}/subnets
    * @param integer $vnet The (unique) ID of the vnet.
  */
  public static function createSubnet($vnet, $data = array())
  {
      return Request::Request("/cluster/sdn/vnets/{$vnet}/subnets", $data, "POST");
  }

  /**
    * Read sdn subnet configuration.
    * GET /api2/json/cluster/sdn/vnets/{id}/subnets/{$subnet}
    * @param integer $vnet The (unique) ID of the vnet.
    * @param integer $subnet The (unique) ID of the subnet.
  */
  public static function getSubnet($vnet, $subnet)
  {
      return Request::Request("/cluster/sdn/vnets/{$vnet}/subnets/{$subnet}");
  }
  
  /**
    * Update sdn subnet object configuration.
    * PUT /api2/json/cluster/sdn/vnets/{id}/subnets/{$subnet}
    * @param integer $vnet The (unique) ID of the vnet.
    * @param integer $subnet The (unique) ID of the subnet.
  */
  public static function updateSubnet($vnet, $subnet, $data = array())
  {
      return Request::Request("/cluster/sdn/vnets/{$vnet}/subnets/{$subnet}", $data, "PUT");
  }
  
  /**
    * Delete sdn subnet object configuration.
    * PUT /api2/json/cluster/sdn/vnets/{id}/subnets/{$subnet}
    * @param integer $vnet The (unique) ID of the vnet.
    * @param integer $subnet The (unique) ID of the subnet.
  */
  public static function deleteSubnet($vnet, $subnet)
  {
      return Request::Request("/cluster/sdn/vnets/{$vnet}/subnets/{$subnet}", null, "DELETE");
  }

  /* SDN Zones */
  /**
    * SDN zones index.
    * GET /api2/json/cluster/sdn/zones
  */
  public static function getZones()
  {
      return Request::Request("/cluster/sdn/zones");
  }
    
  /**
    * Create a new sdn zone object.
    * POST /api2/json/cluster/sdn/zones/{id}
  */
  public static function createZone($data = array())
  {
      return Request::Request("/cluster/sdn/zones", $data, "POST");
  }

  /**
    * Read sdn zone configuration.
    * GET /api2/json/cluster/sdn/zones/{id}
    * @param integer $id The (unique) ID of the zone.
  */
  public static function getZone($id)
  {
      return Request::Request("/cluster/sdn/zones/{$id}");
  }
  
  /**
    * Update sdn zone object configuration.
    * PUT /api2/json/cluster/sdn/zones/{id}
    * @param integer $id The (unique) ID of the zone.
  */
  public static function updateZone($id, $data = array())
  {
      return Request::Request("/cluster/sdn/zones/{$id}", $data, "PUT");
  }
  
  /**
    * Delete sdn zone object configuration.
    * PUT /api2/json/cluster/sdn/zones/{id}
    * @param integer $id The (unique) ID of the zone.
  */
  public static function deleteZone($id)
  {
      return Request::Request("/cluster/sdn/zones/{$id}", null, "DELETE");
  }
}
