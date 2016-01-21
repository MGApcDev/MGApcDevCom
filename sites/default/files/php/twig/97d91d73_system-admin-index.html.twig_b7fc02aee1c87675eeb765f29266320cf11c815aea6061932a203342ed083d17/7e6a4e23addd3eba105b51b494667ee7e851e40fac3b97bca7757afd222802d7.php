<?php

/* core/themes/stable/templates/admin/system-admin-index.html.twig */
class __TwigTemplate_bb5634fe985e5a01a081b690535232acdbcf8cb8c74594d6b904c3dfd4215c50 extends Twig_Template
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
        $tags = array("for" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 16
        echo "<div class=\"admin clearfix\">
  ";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["system_compact_link"]) ? $context["system_compact_link"] : null), "html", null, true));
        echo "
  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) ? $context["containers"] : null));
        foreach ($context['_seq'] as $context["position"] => $context["blocks"]) {
            // line 19
            echo "    <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["position"], "html", null, true));
            echo " clearfix\">
      ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["blocks"]);
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 21
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["block"], "html", null, true));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['blocks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-admin-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  72 => 23,  63 => 21,  59 => 20,  54 => 19,  50 => 18,  46 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the admin index page.*/
/*  **/
/*  * Available variables:*/
/*  * - system_compact_link: Themed link to toggle compact view.*/
/*  * - containers: A list of administrative containers keyed by position: left or*/
/*  *   right. Each container in the list contains:*/
/*  *   - blocks: A list of administrative blocks, rendered*/
/*  *     through admin-block.html.twig.*/
/*  **/
/*  * @see template_preprocess_system_admin_index()*/
/*  *//* */
/* #}*/
/* <div class="admin clearfix">*/
/*   {{ system_compact_link }}*/
/*   {% for position, blocks in containers %}*/
/*     <div class="{{ position }} clearfix">*/
/*       {% for block in blocks %}*/
/*         {{ block }}*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
