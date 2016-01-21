<?php

/* core/modules/system/templates/select.html.twig */
class __TwigTemplate_8336f059fe05bf5b8ed46ffbdc6d10274b163db535dd75e65f816e04425289a0 extends Twig_Template
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
        $tags = array("spaceless" => 15, "for" => 17, "if" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'for', 'if'),
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

        // line 15
        ob_start();
        // line 16
        echo "  <select";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 18
            echo "      ";
            if (($this->getAttribute($context["option"], "type", array()) == "optgroup")) {
                // line 19
                echo "        <optgroup label=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["option"], "label", array()), "html", null, true));
                echo "\">
          ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 21
                    echo "            <option value=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["sub_option"], "value", array()), "html", null, true));
                    echo "\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute($context["sub_option"], "selected", array())) ? (" selected=\"selected\"") : (""))));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["sub_option"], "label", array()), "html", null, true));
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        </optgroup>
      ";
            } elseif (($this->getAttribute(            // line 24
$context["option"], "type", array()) == "option")) {
                // line 25
                echo "        <option value=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute($context["option"], "selected", array())) ? (" selected=\"selected\"") : (""))));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["option"], "label", array()), "html", null, true));
                echo "</option>
      ";
            }
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </select>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  94 => 27,  84 => 25,  82 => 24,  79 => 23,  66 => 21,  62 => 20,  57 => 19,  54 => 18,  50 => 17,  45 => 16,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a select element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the select tag.*/
/*  * - options: The option element children.*/
/*  **/
/*  * @see template_preprocess_select()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   <select{{ attributes }}>*/
/*     {% for option in options %}*/
/*       {% if option.type == 'optgroup' %}*/
/*         <optgroup label="{{ option.label }}">*/
/*           {% for sub_option in option.options %}*/
/*             <option value="{{ sub_option.value }}"{{ sub_option.selected ? ' selected="selected"' }}>{{ sub_option.label }}</option>*/
/*           {% endfor %}*/
/*         </optgroup>*/
/*       {% elseif option.type == 'option' %}*/
/*         <option value="{{ option.value }}"{{ option.selected ? ' selected="selected"' }}>{{ option.label }}</option>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*   </select>*/
/* {% endspaceless %}*/
/* */
