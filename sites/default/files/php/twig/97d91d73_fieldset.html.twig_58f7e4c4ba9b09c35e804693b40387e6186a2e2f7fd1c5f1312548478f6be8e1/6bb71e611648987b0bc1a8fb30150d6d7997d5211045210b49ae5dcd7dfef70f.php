<?php

/* core/modules/system/templates/fieldset.html.twig */
class __TwigTemplate_d47ca75ec63c1f2466e1620c8042fc165979b65757c585d36de78e80eb80d088 extends Twig_Template
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
        $tags = array("set" => 26, "if" => 46);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 26
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper");
        // line 33
        echo "<fieldset";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 35
        $context["legend_span_classes"] = array(0 => "fieldset-legend", 1 => ((        // line 37
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 2 => ((        // line 38
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 41
        echo "  ";
        // line 42
        echo "  <legend";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "attributes", array()), "html", null, true));
        echo ">
    <span";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["legend_span"]) ? $context["legend_span"] : null), "attributes", array()), "addClass", array(0 => (isset($context["legend_span_classes"]) ? $context["legend_span_classes"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "title", array()), "html", null, true));
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 46
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 47
            echo "      <div>
        ";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 51
        echo "    ";
        if ((isset($context["prefix"]) ? $context["prefix"] : null)) {
            // line 52
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true));
            echo "</span>
    ";
        }
        // line 54
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
    ";
        // line 55
        if ((isset($context["suffix"]) ? $context["suffix"] : null)) {
            // line 56
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true));
            echo "</span>
    ";
        }
        // line 58
        echo "    ";
        if ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array())) {
            // line 59
            echo "      <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => "description"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 61
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 61,  105 => 59,  102 => 58,  96 => 56,  94 => 55,  89 => 54,  83 => 52,  80 => 51,  74 => 48,  71 => 47,  69 => 46,  61 => 43,  56 => 42,  54 => 41,  52 => 38,  51 => 37,  50 => 35,  45 => 33,  43 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a fieldset element and its children.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the fieldset element.*/
/*  * - errors: (optional) Any errors for this fieldset element, may not be set.*/
/*  * - required: Boolean indicating whether the fieldeset element is required.*/
/*  * - legend: The legend element containing the following properties:*/
/*  *   - title: Title of the fieldset, intended for use as the text of the legend.*/
/*  *   - attributes: HTML attributes to apply to the legend.*/
/*  * - description: The description element containing the following properties:*/
/*  *   - content: The description content of the fieldset.*/
/*  *   - attributes: HTML attributes to apply to the description container.*/
/*  * - children: The rendered child elements of the fieldset.*/
/*  * - prefix: The content to add before the fieldset children.*/
/*  * - suffix: The content to add after the fieldset children.*/
/*  **/
/*  * @see template_preprocess_fieldset()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'js-form-item',*/
/*     'form-item',*/
/*     'js-form-wrapper',*/
/*     'form-wrapper',*/
/*   ]*/
/* %}*/
/* <fieldset{{ attributes.addClass(classes) }}>*/
/*   {%*/
/*     set legend_span_classes = [*/
/*       'fieldset-legend',*/
/*       required ? 'js-form-required',*/
/*       required ? 'form-required',*/
/*     ]*/
/*   %}*/
/*   {#  Always wrap fieldset legends in a SPAN for CSS positioning. #}*/
/*   <legend{{ legend.attributes }}>*/
/*     <span{{ legend_span.attributes.addClass(legend_span_classes) }}>{{ legend.title }}</span>*/
/*   </legend>*/
/*   <div class="fieldset-wrapper">*/
/*     {% if errors %}*/
/*       <div>*/
/*         {{ errors }}*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if prefix %}*/
/*       <span class="field-prefix">{{ prefix }}</span>*/
/*     {% endif %}*/
/*     {{ children }}*/
/*     {% if suffix %}*/
/*       <span class="field-suffix">{{ suffix }}</span>*/
/*     {% endif %}*/
/*     {% if description.content %}*/
/*       <div{{ description.attributes.addClass('description') }}>{{ description.content }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </fieldset>*/
/* */
