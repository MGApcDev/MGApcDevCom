<?php

/* core/modules/system/templates/table.html.twig */
class __TwigTemplate_2e0b5dc9cdda499ae7cb75bd2712f3d4bc03217907dcd2cc768cebb29dee7150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 45, "for" => 49);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 44
        echo "<table";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 45
        if ((isset($context["caption"]) ? $context["caption"] : null)) {
            // line 46
            echo "    <caption>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true));
            echo "</caption>
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colgroups"]) ? $context["colgroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 50
            echo "    ";
            if ($this->getAttribute($context["colgroup"], "cols", array())) {
                // line 51
                echo "      <colgroup";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["colgroup"], "attributes", array()), "html", null, true));
                echo ">
        ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["colgroup"], "cols", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 53
                    echo "          <col";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["col"], "attributes", array()), "html", null, true));
                    echo " />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "      </colgroup>
    ";
            } else {
                // line 57
                echo "      <colgroup";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["colgroup"], "attributes", array()), "html", null, true));
                echo " />
    ";
            }
            // line 59
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
  ";
        // line 61
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 62
            echo "    <thead>
      <tr>
        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 65
                echo "          <";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true));
                echo ">";
                // line 66
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                // line 67
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                echo ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "      </tr>
    </thead>
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 74
            echo "    <tbody>
      ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 76
                echo "        <tr";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">
          ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 78
                    echo "            <";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true));
                    echo ">";
                    // line 79
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                    // line 80
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    </tbody>
  ";
        } elseif (        // line 85
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 86
            echo "    <tbody>
      <tr>
        <td colspan=\"";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_columns"]) ? $context["header_columns"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            echo "</td>
      </tr>
    </tbody>
  ";
        }
        // line 92
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 93
            echo "    <tfoot>
      ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footer"]) ? $context["footer"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 95
                echo "        <tr";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">
          ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 97
                    echo "            <";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true));
                    echo ">";
                    // line 98
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                    // line 99
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    </tfoot>
  ";
        }
        // line 105
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 105,  238 => 103,  231 => 101,  222 => 99,  220 => 98,  215 => 97,  211 => 96,  206 => 95,  202 => 94,  199 => 93,  196 => 92,  187 => 88,  183 => 86,  181 => 85,  178 => 84,  171 => 82,  162 => 80,  160 => 79,  155 => 78,  151 => 77,  146 => 76,  142 => 75,  139 => 74,  137 => 73,  134 => 72,  129 => 69,  120 => 67,  118 => 66,  113 => 65,  109 => 64,  105 => 62,  103 => 61,  100 => 60,  94 => 59,  88 => 57,  84 => 55,  75 => 53,  71 => 52,  66 => 51,  63 => 50,  59 => 49,  56 => 48,  50 => 46,  48 => 45,  43 => 44,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a table.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes to apply to the <table> tag.*/
/*  * - caption: A localized string for the <caption> tag.*/
/*  * - colgroups: Column groups. Each group contains the following properties:*/
/*  *   - attributes: HTML attributes to apply to the <col> tag.*/
/*  *     Note: Drupal currently supports only one table header row, see*/
/*  *     https://www.drupal.org/node/893530 and*/
/*  *     http://api.drupal.org/api/drupal/includes!theme.inc/function/theme_table/7#comment-5109.*/
/*  * - header: Table header cells. Each cell contains the following properties:*/
/*  *   - tag: The HTML tag name to use; either TH or TD.*/
/*  *   - attributes: HTML attributes to apply to the tag.*/
/*  *   - content: A localized string for the title of the column.*/
/*  *   - field: Field name (required for column sorting).*/
/*  *   - sort: Default sort order for this column ("asc" or "desc").*/
/*  * - sticky: A flag indicating whether to use a "sticky" table header.*/
/*  * - rows: Table rows. Each row contains the following properties:*/
/*  *   - attributes: HTML attributes to apply to the <tr> tag.*/
/*  *   - data: Table cells.*/
/*  *   - no_striping: A flag indicating that the row should receive no*/
/*  *     'even / odd' styling. Defaults to FALSE.*/
/*  *   - cells: Table cells of the row. Each cell contains the following keys:*/
/*  *     - tag: The HTML tag name to use; either TH or TD.*/
/*  *     - attributes: Any HTML attributes, such as "colspan", to apply to the*/
/*  *       table cell.*/
/*  *     - content: The string to display in the table cell.*/
/*  *     - active_table_sort: A boolean indicating whether the cell is the active*/
/*          table sort.*/
/*  * - footer: Table footer rows, in the same format as the rows variable.*/
/*  * - empty: The message to display in an extra row if table does not have*/
/*  *   any rows.*/
/*  * - no_striping: A boolean indicating that the row should receive no striping.*/
/*  * - header_columns: The number of columns in the header.*/
/*  **/
/*  * @see template_preprocess_table()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <table{{ attributes }}>*/
/*   {% if caption %}*/
/*     <caption>{{ caption }}</caption>*/
/*   {% endif %}*/
/* */
/*   {% for colgroup in colgroups %}*/
/*     {% if colgroup.cols %}*/
/*       <colgroup{{ colgroup.attributes }}>*/
/*         {% for col in colgroup.cols %}*/
/*           <col{{ col.attributes }} />*/
/*         {% endfor %}*/
/*       </colgroup>*/
/*     {% else %}*/
/*       <colgroup{{ colgroup.attributes }} />*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* */
/*   {% if header %}*/
/*     <thead>*/
/*       <tr>*/
/*         {% for cell in header %}*/
/*           <{{ cell.tag }}{{ cell.attributes }}>*/
/*             {{- cell.content -}}*/
/*           </{{ cell.tag }}>*/
/*         {% endfor %}*/
/*       </tr>*/
/*     </thead>*/
/*   {% endif %}*/
/* */
/*   {% if rows %}*/
/*     <tbody>*/
/*       {% for row in rows %}*/
/*         <tr{{ row.attributes }}>*/
/*           {% for cell in row.cells %}*/
/*             <{{ cell.tag }}{{ cell.attributes }}>*/
/*               {{- cell.content -}}*/
/*             </{{ cell.tag }}>*/
/*           {% endfor %}*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   {% elseif empty %}*/
/*     <tbody>*/
/*       <tr>*/
/*         <td colspan="{{ header_columns }}">{{ empty }}</td>*/
/*       </tr>*/
/*     </tbody>*/
/*   {% endif %}*/
/*   {% if footer %}*/
/*     <tfoot>*/
/*       {% for row in footer %}*/
/*         <tr{{ row.attributes }}>*/
/*           {% for cell in row.cells %}*/
/*             <{{ cell.tag }}{{ cell.attributes }}>*/
/*               {{- cell.content -}}*/
/*             </{{ cell.tag }}>*/
/*           {% endfor %}*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tfoot>*/
/*   {% endif %}*/
/* </table>*/
/* */
