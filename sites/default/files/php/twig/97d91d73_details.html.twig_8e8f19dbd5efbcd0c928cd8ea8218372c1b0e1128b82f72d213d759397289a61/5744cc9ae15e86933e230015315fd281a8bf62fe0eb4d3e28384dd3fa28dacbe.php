<?php

/* core/modules/system/templates/details.html.twig */
class __TwigTemplate_f74dc55c17dcdfa154353de09e6e00611271ec00a6f5e1acfa57dd21202a5a27 extends Twig_Template
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
        $tags = array("if" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 19
        echo "<details";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        // line 20
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 21
            echo "<summary";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["summary_attributes"]) ? $context["summary_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</summary>";
        }
        // line 24
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 25
            echo "    <div>
      ";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 29
        echo "
  ";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
        echo "
  ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        echo "
</details>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  74 => 31,  70 => 30,  67 => 29,  61 => 26,  58 => 25,  56 => 24,  49 => 21,  47 => 20,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a details element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the details element.*/
/*  * - errors: (optional) Any errors for this details element, may not be set.*/
/*  * - title: (optional) The title of the element, may not be set.*/
/*  * - description: (optional) The description of the element, may not be set.*/
/*  * - children: (optional) The children of the element, may not be set.*/
/*  * - value: (optional) The value of the element, may not be set.*/
/*  **/
/*  * @see template_preprocess_details()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <details{{ attributes }}>*/
/*   {%- if title -%}*/
/*     <summary{{ summary_attributes }}>{{ title }}</summary>*/
/*   {%- endif -%}*/
/* */
/*   {% if errors %}*/
/*     <div>*/
/*       {{ errors }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {{ description }}*/
/*   {{ children }}*/
/*   {{ value }}*/
/* </details>*/
/* */
